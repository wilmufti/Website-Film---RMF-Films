<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit {{ $table }}</title>

    @include('admin.form-style')
    @include('admin.form-script')
</head>

<body>
<div class="form-container">

    <h2>Edit Tabel: {{ $table }}</h2>

    <form method="POST" action="{{ route('admin.update', ['table'=>$table,'id'=>$id]) }}">
        @csrf
        @method('PUT')

        @foreach($columns as $field)
            @php
                $value = $item[$field] ?? '';
            @endphp

            {{-- Primary Key --}}
            @if($field === $primaryKey)
                <label>{{ $field }} (Primary Key)</label>
                <input name="{{ $field }}" value="{{ $value }}" readonly>
                @continue
            @endif

            {{-- also_known_as --}}
            @if($field === 'also_known_as')
                <label>Also Known As:</label>
                <div id="also_known_as">
                    @foreach(json_decode($value, true) ?? [] as $val)
                        <input name="also_known_as[]" value="{{ $val }}">
                    @endforeach
                </div>
                <button type="button" onclick="addField('also_known_as', 'also_known_as[]')">+ Tambah Nama</button>
                @continue
            @endif

            {{-- known_for_films --}}
            @if($field === 'known_for_films')
                <label>Known For Films:</label>
                <div id="known_for_films">
                    @foreach(json_decode($value, true) ?? [] as $i => $f)
                        <div class="multi-field">
                            <button type="button" class="remove-btn" onclick="this.parentElement.remove()">×</button>
                            <input name="known_for_films[{{ $i }}][title]" value="{{ $f['title'] }}">
                            <input name="known_for_films[{{ $i }}][alt]" value="{{ $f['alt'] }}">
                            <input name="known_for_films[{{ $i }}][image_url]" value="{{ $f['image_url'] }}" oninput="previewImage(this)">
                            <img class="preview" src="{{ $f['image_url'] }}">
                        </div>
                    @endforeach
                </div>
                <button type="button" onclick="addKnownForFilm()">+ Tambah Film</button>
                @continue
            @endif

            {{-- film_credits --}}
            @if($field === 'film_credits')
                <label>Film Credits:</label>
                <div id="film_credits">
                    @foreach(json_decode($value, true) ?? [] as $i => $c)
                        <div class="multi-field">
                            <button type="button" class="remove-btn" onclick="this.parentElement.remove()">×</button>
                            <input name="film_credits[{{ $i }}][year]" value="{{ $c['year'] }}">
                            <input name="film_credits[{{ $i }}][popup_title]" value="{{ $c['popup_title'] }}">
                            <input name="film_credits[{{ $i }}][popup_image_url]" value="{{ $c['popup_image_url'] }}" oninput="previewImage(this)">
                            <img class="preview" src="{{ $c['popup_image_url'] }}">
                            <input name="film_credits[{{ $i }}][credit_role_main]" value="{{ $c['credit_role_main'] }}">
                            <textarea name="film_credits[{{ $i }}][popup_description]">{{ $c['popup_description'] }}</textarea>
                            <input name="film_credits[{{ $i }}][credit_role_secondary]" value="{{ $c['credit_role_secondary'] }}">
                        </div>
                    @endforeach
                </div>
                <button type="button" onclick="addFilmCredit()">+ Tambah Credit</button>
                @continue
            @endif

            {{-- Default --}}
            <label>{{ $field }}:</label>
            <input name="{{ $field }}" value="{{ $value }}">
        @endforeach

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>
    <a class="btn-secondary" href="{{ route('admin.dashboard', ['table'=>$table]) }}">&larr; Kembali</a>
</div>
</body>
</html>
