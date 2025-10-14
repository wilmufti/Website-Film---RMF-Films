<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeMetadataSeeder extends Seeder
{
    public function run()
    {
        DB::table('anime_metadata')->insert([
            [
                'anime_name' => '5 Centimeters per Second',
                'source' => 'movies',
                'description' => 'A tale of love and distance following the lives of two friends growing apart over the years.',
                'genres' => 'Romance,Drama,Slice of Life',
                'characters' => json_encode([
                    ["name" => "Takaki Tono", "image_url" => "https://cdn.myanimelist.net/images/characters/10/56152.jpg", "voice_actor" => "Kenji Mizuhashi"],
                    ["name" => "Akari Shinohara", "image_url" => "https://cdn.myanimelist.net/images/characters/6/56151.jpg", "voice_actor" => "Yoshimi Kondou"],
                    ["name" => "Kanae Sumida", "image_url" => "https://cdn.myanimelist.net/images/characters/5/138139.jpg", "voice_actor" => "Satomi Hanamura"]
                ]),
            ],
            [
                'anime_name' => 'Attack on Titan',
                'source' => 'films',
                'description' => 'Mankind fights for survival against giant humanoid Titans. Eren Yeager joins the Scout Regiment to uncover the truth and seek revenge.',
                'genres' => 'Action,Dark fantasy,Drama',
                'characters' => json_encode([
                    ["name" => "Eren Yeager", "image_url" => "https://cdn.myanimelist.net/images/characters/10/216895.jpg", "voice_actor" => "Yuki Kaji"],
                    ["name" => "Mikasa Ackerman", "image_url" => "https://cdn.myanimelist.net/images/characters/9/215563.jpg", "voice_actor" => "Yui Ishikawa"],
                    ["name" => "Armin Arlert", "image_url" => "https://cdn.myanimelist.net/images/characters/8/220267.jpg", "voice_actor" => "Marina Inoue"]
                ]),
            ],
            // ... Tambahkan semua data metadata lainnya dari file .sql di sini
        ]);
    }
}