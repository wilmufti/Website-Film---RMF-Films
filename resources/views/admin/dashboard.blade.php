<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>

  <style>
    :root {
        --primary: #1e1e2f;
        --secondary: #3498db;
        --light: #ffffff;
        --dark: #151521;
        --text: #ecf0f1;
        --highlight: #2980b9;
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
      }

      body {
        background-color: var(--dark);
        color: var(--text);
        display: flex;
        min-height: 100vh;
      }

      .sidebar {
        width: 220px;
        background-color: var(--primary);
        padding: 20px;
        flex-shrink: 0;
      }

      .sidebar h1 {
        font-size: 22px;
        margin-bottom: 20px;
        color: var(--secondary);
      }

      .sidebar nav a {
        display: block;
        color: var(--text);
        text-decoration: none;
        margin-bottom: 10px;
        padding: 8px 10px;
        border-radius: 4px;
      }

      .sidebar nav a:hover,
      .sidebar nav a.active {
        background-color: var(--highlight);
      }

      .sidebar nav .logout {
        color: red;
        font-weight: bold;
        margin-top: 30px;
        display: block;
      }

      .main-content {
        flex-grow: 1;
        padding: 30px;
      }

      h2 {
        font-size: 24px;
        margin-bottom: 20px;
      }

      .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 20px;
      }

      .card {
        background-color: #1f1f2e;
        border-radius: 8px;
        overflow: hidden;
        text-align: center;
        color: var(--text);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      }

      .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }

      .card .name {
        padding: 10px;
        background-color: #2c2c3e;
        font-weight: bold;
      }

      .action-links a {
        background-color: #16a085;
        padding: 5px 10px;
        color: white;
        border-radius: 4px;
        text-decoration: none;
        font-size: 13px;
        display: inline-block;
        margin-top: 5px;
      }

      .action-links a:hover {
        background-color: #138d75;
      }

     /* Tombol Hapus merah */
     .action-links button {
       background-color: #e74c3c; /* merah */
       color: #fff;
       border: none;
      padding: 6px 10px;
       border-radius: 4px;
       font-size: 13px;
       cursor: pointer;
       margin-top: 5px;
       display: inline-block;
     }

     .action-links button:hover {
       background-color: #c0392b; /* gelap saat hover */
     }

      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
      }

      th, td {
        padding: 10px;
        border: 1px solid #333;
        text-align: left;
        vertical-align: top;
      }

      th {
        background-color: var(--primary);
      }

      pre {
        white-space: pre-wrap;
        word-break: break-word;
      }

      a.add-btn {
        display: inline-block;
        background: #27ae60;
        color: white;
        padding: 8px 14px;
        margin-bottom: 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
      }

      img {
        max-height: 100px;
      }
  </style>
</head>

<body>
<div class="sidebar">
  <h1>RMF</h1>
  <nav>
    @foreach ($tables as $t)
      <a href="{{ route('admin.dashboard', ['table' => $t]) }}"
         class="{{ $selectedTable === $t ? 'active' : '' }}">
         {{ ucwords(str_replace('_',' ',$t)) }}
      </a>
    @endforeach

    <form action="{{ route('admin.logout') }}" method="POST">
      @csrf
      <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" style="color:red;font-weight:bold;">
        Logout
      </a>
    </form>
  </nav>
</div>

<div class="main-content">

  <h2>{{ ucwords(str_replace('_',' ', $selectedTable)) }}</h2>

  <a href="{{ route('admin.create', ['table' => $selectedTable]) }}" class="add-btn">
    + Tambah Data
  </a>

  @php
      $hasPhoto = in_array('photo', $columns) || in_array('profile_image_url', $columns);
      $hasName  = in_array('name', $columns) || in_array('person_name', $columns);
  @endphp

  {{-- ============================ --}}
  {{-- === MODE GRID (PHOTO + NAME) --}}
  {{-- ============================ --}}
  @if ($hasPhoto && $hasName)
      <div class="grid">
        @foreach($data as $row)
            <div class="card">
                @php
                    $img = $row->photo ?? $row->profile_image_url ?? null;
                    $displayName = $row->name ?? $row->person_name ?? '(No Name)';
                @endphp

                @if ($img && filter_var($img, FILTER_VALIDATE_URL))
                    <img src="{{ $img }}" alt="img">
                @else
                    <img src="https://via.placeholder.com/150x200?text=No+Image" alt="img">
                @endif

                <div class="name">{{ $displayName }}</div>

                <div class="action-links">
                    <a href="{{ route('admin.edit', ['table'=>$selectedTable, 'id'=>$row->$primaryKey]) }}">
                        Edit
                    </a>

                    <form action="{{ route('admin.destroy', ['table'=>$selectedTable, 'id'=>$row->$primaryKey]) }}"
                          method="POST"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
      </div>

  {{-- ============================ --}}
  {{-- === MODE TABEL (normal) --}}
  {{-- ============================ --}}
  @else
      <table>
        <thead>
          <tr>
            @foreach($columns as $col)
              <th>{{ $col }}</th>
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @foreach($data as $row)
            <tr>
              @foreach($columns as $col)
                <td>
                  @php $value = $row->$col; @endphp

                  {{-- Jika URL gambar --}}
                  @if (filter_var($value, FILTER_VALIDATE_URL))
                      <img src="{{ $value }}" style="max-height:100px">

                  {{-- Jika JSON --}}
                  @elseif (is_string($value) && (str_starts_with($value,'[') || str_starts_with($value,'{')))
                      <pre>{{ Str::limit($value, 300) }}</pre>

                  {{-- Normal --}}
                  @else
                      {{ $value }}
                  @endif
                </td>
              @endforeach

              <td class="action-links">
                <a href="{{ route('admin.edit', ['table'=>$selectedTable, 'id'=>$row->$primaryKey]) }}">Edit</a>

                <form action="{{ route('admin.destroy', ['table'=>$selectedTable, 'id'=>$row->$primaryKey]) }}"
                      method="POST"
                      onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  @endif

  {{ $data->appends(['table'=>$selectedTable])->links() }}

</div>
</body>
</html>
