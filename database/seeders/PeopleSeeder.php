<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        DB::table('people')->insert([
            ['id' => 1, 'name' => 'Miyazaki, Hayao', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/54606.jpg'],
            ['id' => 2, 'name' => 'Oda, Eiichiro', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/74096.jpg'],
            ['id' => 3, 'name' => 'Takahashi, Rie', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/3/86541.jpg'],
            ['id' => 4, 'name' => 'Tsuda, Kenjirou', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/63379.jpg'],
            ['id' => 5, 'name' => 'Kishimoto, Masashi', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/42365.jpg'],
            ['id' => 6, 'name' => 'Hayami, Saori', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/86542.jpg'],
            ['id' => 7, 'name' => 'Sawano, Hiroyuki', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/82144.jpg'],
            ['id' => 8, 'name' => 'Anno, Hideaki', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/2/54280.jpg'],
            ['id' => 9, 'name' => 'Kon, Satoshi', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/3/46672.jpg'],
            ['id' => 10, 'name' => 'Inoue, Takehiko', 'image_url' => 'https://cdn.myanimelist.net/images/voiceactors/1/48570.jpg'],
        ]);
    }
}