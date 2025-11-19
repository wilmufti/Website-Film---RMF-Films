<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $id ? "Edit" : "Tambah" }} {{ $table }}</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #1e1e2f;
            color: #f5f6fa;
            padding: 30px;
        }
        .form-container {
            background: #2a2a3b;
            padding: 30px;
            max-width: 900px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-top: 20px;
            font-weight: 600;
            color: #dcdde1;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            background: #3a3a4f;
            color: #ffffff;
            border: 1px solid #555;
            border-radius: 6px;
            font-size: 14px;
        }
        input::placeholder,
        textarea::placeholder {
            color: #999;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }
        button:hover {
            background: #2980b9;
        }
        .btn-secondary {
            background: #7f8c8d;
            color: white;
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 6px;
        }
        .btn-secondary:hover {
            background: #95a5a6;
        }
        .multi-field {
            background: #353546;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
            border: 1px solid #444;
            position: relative;
        }
        .multi-field img.preview {
            max-width: 80px;
            max-height: 80px;
            margin-top: 8px;
            border-radius: 4px;
            border: 1px solid #777;
        }
        .remove-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 4px 8px;
            cursor: pointer;
        }
        .remove-btn:hover {
            background: #c0392b;
        }
    </style>

    <script>
        function addField(containerId, inputName) {
            const container = document.getElementById(containerId);
            const input = document.createElement('input');
            input.name = inputName;
            input.placeholder = 'Nama alternatif';
            container.appendChild(input);
        }

        function addKnownForFilm() {
            const container = document.getElementById('known_for_films');
            const index = container.children.length;
            container.insertAdjacentHTML('beforeend', `
                <div class="multi-field">
                    <button type="button" class="remove-btn" onclick="this.parentElement.remove()">×</button>
                    <input name="known_for_films[${index}][title]" placeholder="Judul Film">
                    <input name="known_for_films[${index}][alt]" placeholder="Alt">
                    <input name="known_for_films[${index}][image_url]" placeholder="URL Gambar" oninput="previewImage(this)">
                    <img class="preview" src="" style="display:none">
                </div>`);
        }

        function addFilmCredit() {
            const container = document.getElementById('film_credits');
            const index = container.children.length;
            container.insertAdjacentHTML('beforeend', `
                <div class="multi-field">
                    <button type="button" class="remove-btn" onclick="this.parentElement.remove()">×</button>
                    <input name="film_credits[${index}][year]" placeholder="Tahun">
                    <input name="film_credits[${index}][popup_title]" placeholder="Judul">
                    <input name="film_credits[${index}][popup_image_url]" placeholder="URL Gambar" oninput="previewImage(this)">
                    <img class="preview" src="" style="display:none">
                    <input name="film_credits[${index}][credit_role_main]" placeholder="Peran Utama">
                    <textarea name="film_credits[${index}][popup_description]" placeholder="Deskripsi"></textarea>
                    <input name="film_credits[${index}][credit_role_secondary]" placeholder="Peran Tambahan">
                </div>`);
        }

        function previewImage(input) {
            const preview = input.nextElementSibling;
            if (input.value.startsWith('http')) {
                preview.src = input.value;
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('input[oninput="previewImage(this)"]').forEach(input => previewImage(input));
        });
    </script>
</head>

<body>
<div class="form-container">

    <h2>{{ $id ? "Edit" : "Tambah" }} Tabel: {{ $table }}</h2>

    <form method="POST" action="{{ $id 
        ? route('admin.update', ['table'=>$table,'id'=>$id]) 
        : route('admin.store', ['table'=>$table]) }}">
        
        @csrf
        @if($id) @method('PUT') @endif

        @foreach($columns as $col)
            @php
                $field = $col;
                $value = $item[$field] ?? '';
            @endphp

            {{-- Primary Key --}}
            @if($id && $field === $primaryKey)
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

            {{-- Default field --}}
            <label>{{ $field }}:</label>
            <input name="{{ $field }}" value="{{ $value }}">
        @endforeach

        <br>
        <button type="submit">{{ $id ? "Simpan Perubahan" : "Tambah Data" }}</button>
    </form>

    <br>
    <a class="btn-secondary" href="{{ route('admin.dashboard', ['table'=>$table]) }}">&larr; Kembali</a>
</div>
</body>
</html>
