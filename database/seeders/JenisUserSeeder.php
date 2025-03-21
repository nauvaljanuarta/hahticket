<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('jenis_users')->insert([
            [
                'jenis_user' => 'Admin',
                'create_by' => 'system',
                'update_by' => 'system',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_user' => 'Customer',
                'create_by' => 'system',
                'update_by' => 'system',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_user' => 'EO',
                'create_by' => 'system',
                'update_by' => 'system',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
