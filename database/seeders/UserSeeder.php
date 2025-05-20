<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
{
    $imagePath = 'images/smbiz.png'; // relative to public folder

    if (!file_exists(public_path($imagePath))) {
        $this->command->error("Image file does not exist at path: " . public_path($imagePath));
        return;
    }

    DB::table('users')->insert([
        'name' => 'SM Biz',
        'email' => 'smbiz@gmail.com',
        'password' => Hash::make('password'),
        'profile_image' => $imagePath,  // store path only
        'created_at' => now(),
        'updated_at' => now(),
]);
    //     DB::table('users')->insert([
    //     'name' => 'Bharat Bista',
    //     'email' => 'bharatbista2062@gmail.com',
    //     'password' => Hash::make('password'),
    //     'profile_image' => $imagePath,  // store path only
    //     'created_at' => now(),
    //     'updated_at' => now(),
    // ]);

    $this->command->info('Users seeded with profile image path successfully.');
}


}
