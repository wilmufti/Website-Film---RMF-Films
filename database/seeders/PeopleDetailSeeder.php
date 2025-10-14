<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleDetailSeeder extends Seeder
{
    public function run()
    {
        DB::table('people_details')->insert([
            [
                'person_id' => 1,
                'name' => 'Miyazaki, Hayao',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/54606.jpg',
                'known_for_department' => 'Directing',
                'known_credits_count' => 50,
                'gender' => 'Male',
                'birth_date' => '1941-01-05',
                'place_of_birth' => 'Bunkyō, Tokyo, Japan',
                'biography' => 'Hayao Miyazaki (born January 5, 1941) is a Japanese animator, director, producer, screenwriter, author, and manga artist. A co-founder of Studio Ghibli, he is widely regarded as one of the most accomplished filmmakers in the history of animation...',
                'also_known_as' => json_encode(["宮崎 駿", "미야자키 하야오", "宫崎骏", "Хаяо Миядзаки", "هياو ميازاكي", "Hayao Miyazaki"]),
                'known_for_films' => json_encode([
                    ["alt" => "My Neighbor Totoro", "title" => "My Neighbor Totoro", "image_url" => "https://image.tmdb.org/t/p/w200/rtGDOeG9LzoerkDGZF9dnVeLppL.jpg"],
                    ["alt" => "Spirited Away", "title" => "Spirited Away", "image_url" => "https://image.tmdb.org/t/p/original/fJGWeVHGuLSWbGShaxICAUCzBE5.jpg"],
                    ["alt" => "Princess Mononoke", "title" => "Princess Mononoke", "image_url" => "https://image.tmdb.org/t/p/w200/pdtzEreKvKAlqa2YEBaGwiA45V8.jpg"],
                    ["alt" => "Howl's Moving Castle", "title" => "Howl's Moving Castle", "image_url" => "https://th.bing.com/th/id/OIP.4DHhEX0BYU0JtB_C2j7BMQHaLH?rs=1&pid=ImgDetMain"]
                ]),
                'film_credits' => json_encode([
                    ["year" => "2002", "popup_title" => "Mei to Koneko Bus", "popup_image_url" => "https://cdn.myanimelist.net/images/anime/1034/99602.jpg", "credit_role_main" => "Grandmother Nekobasu", "popup_description" => "One windy day, Mei Kusakabe ventures outside...", "credit_role_secondary" => "as Supporting"],
                    ["year" => "2013", "popup_title" => "The Wind Rises", "popup_image_url" => "https://vistapointe.net/images/the-wind-rises-4.jpg", "credit_role_main" => "Kaze Tachinu", "popup_description" => "Despite his nearsightedness...", "credit_role_secondary" => "The Wind Rises"]
                ]),
            ],
            // Tambahkan data orang lain di sini mengikuti pola yang sama
            [
                'person_id' => 2,
                'name' => 'Oda, Eiichiro',
                'profile_image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/74096.jpg',
                'known_for_department' => 'Writing',
                'known_credits_count' => 120,
                'gender' => 'Male',
                'birth_date' => '1975-01-01',
                'place_of_birth' => 'Kumamoto, Japan',
                'biography' => 'Eiichiro Oda is a Japanese manga artist and the creator of the popular manga series One Piece...',
                'also_known_as' => json_encode(["尾田 栄一郎", "Eiichirō Oda", "Oda-sensei"]),
                'known_for_films' => '[]', // Isi sesuai data Anda
                'film_credits' => '[]',    // Isi sesuai data Anda
            ],
        ]);
    }
}