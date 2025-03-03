<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'),
                'no_hp' => '081234567890',
                'create_by' => 'system',
                'update_by' => 'system',
                'jenis_user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'customer1',
                'email' => 'customer1@gmail.com',
                'password' => Hash::make('1234'),
                'no_hp' => '081234567891',
                'create_by' => 'system',
                'update_by' => 'system',
                'jenis_user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'organizer1',
                'email' => 'organizer1@gmail.com',
                'password' => Hash::make('1234'),
                'no_hp' => '081234567891',
                'create_by' => 'system',
                'update_by' => 'system',
                'jenis_user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}