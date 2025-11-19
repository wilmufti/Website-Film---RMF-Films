<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah {{ $table }}</title>

    @include('admin.form-style')
    @include('admin.form-script')
</head>

<body>
<div class="form-container">

    <h2>Tambah Tabel: {{ $table }}</h2>

    <form method="POST" action="{{ route('admin.store', ['table'=>$table]) }}">
        @csrf

        @foreach($columns as $field)
            {{-- Skip primary key auto increment --}}
            @if($field === $primaryKey)
                @continue
            @endif

            {{-- also_known_as --}}
            @if($field === 'also_known_as')
                <label>Also Known As:</label>
                <div id="also_known_as">
                    <input name="also_known_as[]" placeholder="Nama alternatif">
                </div>
                <button type="button" onclick="addField('also_known_as', 'also_known_as[]')">+ Tambah Nama</button>
                @continue
            @endif

            {{-- known_for_films --}}
            @if($field === 'known_for_films')
                <label>Known For Films:</label>
                <div id="known_for_films"></div>
                <button type="button" onclick="addKnownForFilm()">+ Tambah Film</button>
                @continue
            @endif

            {{-- film_credits --}}
            @if($field === 'film_credits')
                <label>Film Credits:</label>
                <div id="film_credits"></div>
                <button type="button" onclick="addFilmCredit()">+ Tambah Credit</button>
                @continue
            @endif

            {{-- Default --}}
            <label>{{ $field }}:</label>
            <input name="{{ $field }}" placeholder="Masukkan {{ $field }}">
        @endforeach

        <button type="submit">Tambah Data</button>
    </form>

    <br>
    <a class="btn-secondary" href="{{ route('admin.dashboard', ['table'=>$table]) }}">&larr; Kembali</a>
</div>
</body>
</html>
