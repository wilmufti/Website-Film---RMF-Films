<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit: {{ $item[$primaryKey] }}</title>
    <style>
        /* Salin CSS dari file edit.php lama Anda */
    </style>
</head>
<body>
<div class="form-container">
    <h2>Edit Tabel: {{ $table }}</h2>
    <form method="post" action="{{ route('admin.update', ['table' => $table, 'id' => $item[$primaryKey]]) }}">
        @csrf
        @method('PUT')
        
        @foreach($columns as $col)
            <label>{{ $col }}</label>
            @if($col === $primaryKey)
                <input name="{{ $col }}" value="{{ $item[$col] }}" readonly>
            @else
                <textarea name="{{ $col }}" rows="3">{{ $item[$col] }}</textarea>
            @endif
        @endforeach

        <br><button type="submit">Simpan Perubahan</button>
    </form>
    <br><a class="btn-secondary" href="{{ route('admin.dashboard', ['table' => $table]) }}">&larr; Kembali</a>
</div>
</body>
</html>