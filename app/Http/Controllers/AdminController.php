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

    public function index(Request $request)
    {
        $selectedTable = $request->query('table', $this->tables[0]);
        $this->validateTable($selectedTable);

        $data = DB::table($selectedTable)->paginate(10); // Menggunakan paginasi

        // Cari primary key
        $pk_res = DB::select("SHOW KEYS FROM `{$selectedTable}` WHERE Key_name = 'PRIMARY'");
        $primaryKey = $pk_res[0]->Column_name ?? null;

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
        $pk_res = DB::select("SHOW KEYS FROM `{$table}` WHERE Key_name = 'PRIMARY'");
        $primaryKey = $pk_res[0]->Column_name ?? 'id';

        $item = DB::table($table)->where($primaryKey, $id)->first();

        if (!$item) {
            abort(404, 'Data tidak ditemukan.');
        }

        return view('admin.edit', [
            'table' => $table,
            'item' => (array) $item,
            'columns' => Schema::getColumnListing($table),
            'primaryKey' => $primaryKey,
        ]);
    }
    
    // Anda bisa menambahkan fungsi create, store, update, destroy di sini
    // meniru logika dari file edit.php dan delete.php lama Anda.
}