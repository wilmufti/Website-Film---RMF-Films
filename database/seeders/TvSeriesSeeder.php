<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TvSeriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('tv_series')->insert([
            ['id' => 13, 'judul' => 'Mob Psycho 100', 'gambar' => 'https://www.viu.com/ott/id/articles/wp-content/uploads/2021/04/anime-mob-psycho-100-season-1-sub-indo-viu.jpg', 'tahun' => 2023, 'rating' => '9.31'],
            ['id' => 14, 'judul' => 'Clannad: After Story', 'gambar' => 'https://m.media-amazon.com/images/I/81R8HeREVwL.jpg', 'tahun' => 2009, 'rating' => '9.10'],
            ['id' => 15, 'judul' => 'Steins;Gate', 'gambar' => 'https://m.media-amazon.com/images/M/MV5BZjI1YjZiMDUtZTI3MC00YTA5LWIzMmMtZmQ0NTZiYWM4NTYwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', 'tahun' => 2011, 'rating' => '9.07'],
            ['id' => 17, 'judul' => 'Gintama°', 'gambar' => 'https://m.media-amazon.com/images/M/MV5BNTMzNjE0N2ItNjFiYi00NmIzLTk1MzMtZWFjNThjMzI5MTJlXkEyXkFqcGc@._V1_.jpg', 'tahun' => 2015, 'rating' => '9.05'],
            ['id' => 18, 'judul' => 'Hunter x Hunter (2011)', 'gambar' => 'https://external-preview.redd.it/Fa9WLQgYV_G31MN9ZTtAAifpvRU1ZqOa9kXtT4Yc9Jk.jpg?auto=webp&s=226dd3fd7acc5a070e32b77b05176095e02ab1f7', 'tahun' => 2011, 'rating' => '9.03'],
            ['id' => 19, 'judul' => 'Kanojo Okarishimasu', 'gambar' => 'https://m.media-amazon.com/images/M/MV5BNThiMDM2MTktNGMwYi00NTY3LWEyMzQtNDg1NDBlYWIwYTU3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', 'tahun' => 2019, 'rating' => '9.05'],
        ]);
    }
}