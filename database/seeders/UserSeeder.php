<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat admin user jika belum ada
        if (!DB::table('users')->where('username', 'admin')->exists()) {
            DB::table('users')->insert([
                'name' => 'Admin RMF',
                'username' => 'admin',
                'password' => Hash::make('admin123'), // Password dari Users.txt
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}