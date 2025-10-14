<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            ['id' => 11, 'judul' => 'The Girl Who Leapt Through Time', 'gambar' => 'https://resizing.flixster.com/ihfyrH-AKCJbrCUSbCiEJsKPJ3A=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzc2MTU0ODhhLTk4MjMtNGM1Mi1hNWFiLWI5ZmI1MmMxMmE4NS5qcGc=', 'tahun' => 2006, 'rating' => '8.2'],
            ['id' => 12, 'judul' => '5 Centimeters per Second', 'gambar' => 'https://m.media-amazon.com/images/I/61nQilfQknL._AC_UF894,1000_QL80_.jpg', 'tahun' => 2007, 'rating' => '7.6'],
            ['id' => 13, 'judul' => 'Paprika', 'gambar' => 'https://m.media-amazon.com/images/I/91nM-blCPsL.jpg', 'tahun' => 2006, 'rating' => '8.0'],
            ['id' => 14, 'judul' => 'Wolf Children', 'gambar' => 'https://i0.wp.com/gkids.com/wp-content/uploads/2025/04/WLFCH_KeyArt_Web_Dated_2025-04-14-min.jpg?fit=1000%2C1463&ssl=1', 'tahun' => 2012, 'rating' => '8.5'],
            ['id' => 15, 'judul' => 'Summer Wars', 'gambar' => 'https://m.media-amazon.com/images/M/MV5BMTYyOTk3OTQzM15BMl5BanBnXkFtZTcwMjU4NDYyNA@@._V1_.jpg', 'tahun' => 2009, 'rating' => '8.2'],
            ['id' => 16, 'judul' => 'The Tale of the Princess Kaguya', 'gambar' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhnb8w2skc4e9yq-4P2TN45hgVJevNU6pSW7b2qYoOmXAs_wvNku0VP_uxQbYVlXrbZdX9j9vkRgHkfXc-eNoIROOw6YqsSjs_ZvO3IRUuGJgITkG1YEc4P42TMSje0MBotwc8PsxWHrko/s1600/kaguya-poster-compressed.jpg', 'tahun' => 2013, 'rating' => '8.3'],
            ['id' => 17, 'judul' => 'When Marnie Was There', 'gambar' => 'https://resizing.flixster.com/5ljZmB7n__vlOL3hAtwX9kLcm48=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzExZmIxZjFlLTM1YTctNDM5ZS04ZGNlLTc4YjkyYzkxMWFlNC5qcGc=', 'tahun' => 2014, 'rating' => '8.1'],
            ['id' => 18, 'judul' => 'Ni no Kuni', 'gambar' => 'https://image.api.playstation.com/vulcan/img/cfn/11307DgqlKnt8IuPAjA7qC4MASlP52YxuBBkn09PCIw0M5loyDGjGyHKF8PoxoiRu5mZ-JUbJmRqiwMJ__VBv5lVzZ0tQ1H0.png', 'tahun' => 2019, 'rating' => '6.7'],
            ['id' => 19, 'judul' => 'Children Who Chase Lost Voices', 'gambar' => 'https://resizing.flixster.com/pLuJqCtm-8qSYFxnsKE-udT9Xb8=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzhlOTIyM2FiLTk0NTAtNDNjZS1iNGFhLThkOGUyZTljNmMwZS5qcGc=', 'tahun' => 2011, 'rating' => '7.5'],
        ]);
    }
}