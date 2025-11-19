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