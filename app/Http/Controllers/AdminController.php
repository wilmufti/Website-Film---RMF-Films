<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    private $tables = ['films', 'tv_series', 'movies', 'anime_metadata', 'people', 'people_details'];

    private function validateTable($table)
    {
        if (!in_array($table, $this->tables)) {
            abort(404, 'Tabel tidak valid.');
        }
    }

    private function getPrimaryKey($table)
    {
        $driver = DB::getDriverName(); // mysql / sqlite / pgsql / sqlsrv

        // MYSQL
        if ($driver === 'mysql') {
            $indexes = DB::select("SHOW KEYS FROM `$table` WHERE Key_name = 'PRIMARY'");
            return $indexes[0]->Column_name ?? 'id';
        }

        // SQLITE
        if ($driver === 'sqlite') {
            $pragma = DB::select("PRAGMA table_info($table)");
            foreach ($pragma as $col) {
                if ($col->pk == 1) {
                    return $col->name;
                }
            }
            return 'id';
        }

        // POSTGRES
        if ($driver === 'pgsql') {
            $query = "
                SELECT a.attname
                FROM pg_index i
                JOIN pg_attribute a ON a.attrelid = i.indrelid AND a.attnum = ANY(i.indkey)
                WHERE i.indrelid = '{$table}'::regclass AND i.indisprimary;
            ";
            $pk = DB::select($query);
            return $pk[0]->attname ?? 'id';
        }

        // Fallback
        return Schema::getColumnListing($table)[0] ?? 'id';
    }

    public function index(Request $request)
    {
        $selectedTable = $request->query('table', $this->tables[0]);
        $this->validateTable($selectedTable);

        $primaryKey = $this->getPrimaryKey($selectedTable);

        $data = DB::table($selectedTable)->paginate(10);

        return view('admin.dashboard', [
            'tables' => $this->tables,
            'selectedTable' => $selectedTable,
            'data' => $data,
            'primaryKey' => $primaryKey,
            'columns' => Schema::getColumnListing($selectedTable),
        ]);
    }

    public function edit($table, $id)
    {
        $this->validateTable($table);

        $primaryKey = $this->getPrimaryKey($table);

        $item = DB::table($table)->where($primaryKey, $id)->first();

        if (!$item) {
            abort(404, 'Data tidak ditemukan.');
        }

        return view('admin.edit', [
            'table' => $table,
            'id' => $id,
            'item' => (array) $item,
            'columns' => Schema::getColumnListing($table),
            'primaryKey' => $primaryKey,
        ]);
    }

    public function store(Request $request, $table)
    {
        $this->validateTable($table);

        $data = $request->except(['_token']);

        DB::table($table)->insert($data);

        return redirect()->route('admin.dashboard', ['table' => $table])
                         ->with('success', 'Data berhasil ditambahkan.');
    }

    public function update(Request $request, $table, $id)
    {
        $this->validateTable($table);

        $primaryKey = $this->getPrimaryKey($table);

        $data = $request->except(['_token', '_method']);

        DB::table($table)->where($primaryKey, $id)->update($data);

        return redirect()->route('admin.dashboard', ['table' => $table])
                         ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($table, $id)
    {
        $this->validateTable($table);

        $primaryKey = $this->getPrimaryKey($table);

        DB::table($table)->where($primaryKey, $id)->delete();

        return redirect()->route('admin.dashboard', ['table' => $table])
                         ->with('success', 'Data berhasil dihapus.');
    }
}
