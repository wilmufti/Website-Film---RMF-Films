<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    public function run()
    {
        DB::table('films')->insert([
            ['id' => 6, 'judul' => 'Attack on Titan', 'poster' => 'https://cdn.myanimelist.net/images/anime/10/47347.jpg', 'rating' => '9.1', 'category' => 'trending'],
            ['id' => 7, 'judul' => 'Jujutsu Kaisen', 'poster' => 'https://cdn.myanimelist.net/images/anime/1171/109222.jpg', 'rating' => '8.6', 'category' => 'trending'],
            ['id' => 8, 'judul' => 'Chainsaw Man', 'poster' => 'https://cdn.myanimelist.net/images/anime/1806/126216.jpg', 'rating' => '8.3', 'category' => 'trending'],
            ['id' => 9, 'judul' => 'Tokyo Revengers', 'poster' => 'https://cdn.myanimelist.net/images/anime/1839/122012.jpg', 'rating' => '8.0', 'category' => 'trending'],
            ['id' => 10, 'judul' => 'Spy x Family', 'poster' => 'https://cdn.myanimelist.net/images/anime/1441/122795.jpg', 'rating' => '8.5', 'category' => 'trending'],
            ['id' => 11, 'judul' => 'Blue Lock', 'poster' => 'https://cdn.myanimelist.net/images/anime/1258/126929.jpg', 'rating' => '8.4', 'category' => 'trending'],
            ['id' => 12, 'judul' => 'Solo Leveling', 'poster' => 'https://cdn.myanimelist.net/images/anime/1801/142390.jpg', 'rating' => '8.7', 'category' => 'trending'],
            ['id' => 13, 'judul' => 'Mashle', 'poster' => 'https://cdn.myanimelist.net/images/anime/1218/135107.jpg', 'rating' => '7.9', 'category' => 'trending'],
            ['id' => 14, 'judul' => 'Hell’s Paradise', 'poster' => 'https://cdn.myanimelist.net/images/anime/1075/131925.jpg', 'rating' => '8.2', 'category' => 'trending'],
            ['id' => 15, 'judul' => 'Frieren: Beyond Journey’s End', 'poster' => 'https://cdn.myanimelist.net/images/anime/1015/138006.jpg', 'rating' => '9.0', 'category' => 'trending'],
            ['id' => 16, 'judul' => 'Naruto: Shippuden', 'poster' => 'https://cdn.myanimelist.net/images/anime/1565/111305.jpg', 'rating' => '8.7', 'category' => 'popular'],
            ['id' => 17, 'judul' => 'One Piece', 'poster' => 'https://cdn.myanimelist.net/images/anime/1244/138851.jpg', 'rating' => '9.0', 'category' => 'popular'],
            ['id' => 18, 'judul' => 'Dragon Ball Z', 'poster' => 'https://cdn.myanimelist.net/images/anime/1277/142022.jpg', 'rating' => '8.2', 'category' => 'popular'],
            ['id' => 19, 'judul' => 'Demon Slayer', 'poster' => 'https://cdn.myanimelist.net/images/anime/1286/99889.jpg', 'rating' => '8.6', 'category' => 'popular'],
            ['id' => 20, 'judul' => 'My Hero Academia', 'poster' => 'https://cdn.myanimelist.net/images/anime/10/78745.jpg', 'rating' => '8.1', 'category' => 'popular'],
            ['id' => 21, 'judul' => 'Death Note', 'poster' => 'https://cdn.myanimelist.net/images/anime/1079/138100.jpg', 'rating' => '9.0', 'category' => 'popular'],
            ['id' => 22, 'judul' => 'Sword Art Online', 'poster' => 'https://cdn.myanimelist.net/images/anime/11/39717.jpg', 'rating' => '7.9', 'category' => 'popular'],
            ['id' => 23, 'judul' => 'Fullmetal Alchemist: Brotherhood', 'poster' => 'https://cdn.myanimelist.net/images/anime/1208/94745.jpg', 'rating' => '9.1', 'category' => 'popular'],
            ['id' => 24, 'judul' => 'Black Clover', 'poster' => 'https://cdn.myanimelist.net/images/anime/2/88336.jpg', 'rating' => '8.0', 'category' => 'popular'],
            ['id' => 25, 'judul' => 'Bleach: Thousand-Year Blood War', 'poster' => 'https://cdn.myanimelist.net/images/anime/1164/138058.jpg', 'rating' => '8.8', 'category' => 'popular'],
        ]);
    }
}