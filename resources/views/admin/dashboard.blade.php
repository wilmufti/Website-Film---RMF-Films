<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <style>
    /* Salin semua CSS dari file admin.php lama Anda ke sini */
    :root { --primary: #1e1e2f; /* ... */ }
    body { display: flex; /* ... */ }
    .sidebar { width: 220px; /* ... */ }
    .main-content { flex-grow: 1; padding: 30px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { padding: 10px; border: 1px solid #333; text-align: left; }
    th { background-color: var(--primary); }
    .logout-button { background: none!important; border: none; padding: 0!important; color: red; cursor: pointer; font-family: 'Segoe UI',sans-serif; font-size: 1em; }
    .action-links a { color: white; text-decoration: none; padding: 5px 10px; border-radius: 4px; background-color: #3498db; margin-right: 5px;}
    .action-links form { display: inline-block; }
    .action-links button { color: white; text-decoration: none; padding: 5px 10px; border-radius: 4px; background-color: #e74c3c; border: none; cursor: pointer; }
  </style>
</head>
<body>
<div class="sidebar">
  <h1>RMF</h1>
  <nav>
    @foreach ($tables as $t)
      <a href="{{ route('admin.dashboard', ['table' => $t]) }}" class="{{ ($selectedTable === $t) ? 'active' : '' }}">
        {{ ucwords(str_replace('_', ' ', $t)) }}
      </a>
    @endforeach
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="logout">Logout</a>
    </form>
  </nav>
</div>

<div class="main-content">
  <h2>Tabel: {{ ucwords(str_replace('_', ' ', $selectedTable)) }}</h2>
    {{-- <a href="{{ route('admin.create', ['table' => $selectedTable]) }}" class="add-btn">+ Tambah Data</a> --}}
  
  <table>
    <thead>
      <tr>
        @foreach($columns as $column)
            <th>{{ $column }}</th>
        @endforeach
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse($data as $row)
        <tr>
            @foreach($columns as $column)
                <td>{{ Str::limit($row->$column, 100) }}</td>
            @endforeach
            <td class="action-links">
                {{-- <a href="{{ route('admin.edit', ['table' => $selectedTable, 'id' => $row->$primaryKey]) }}">Edit</a>
                <form action="{{ route('admin.destroy', ['table' => $selectedTable, 'id' => $row->$primaryKey]) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form> --}}
            </td>
        </tr>
      @empty
        <tr>
            <td colspan="{{ count($columns) + 1 }}">Tidak ada data.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
    {{-- Link Paginasi --}}
    {{ $data->appends(['table' => $selectedTable])->links() }}
</div>
</body>
</html>