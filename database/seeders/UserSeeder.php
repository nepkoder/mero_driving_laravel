<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'email' => 'bharat@gmail.com',
            'password' =>Hash::make('password'),

        ]);

        DB::table('customers')->insert([
            'email' => 'smbiz@gmail.com',
            'password' =>Hash::make('smbiz'),

        ]);
    }
}
