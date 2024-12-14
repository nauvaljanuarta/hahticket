<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('menu_levels')->insert([
            [
                'level' => 'Main',
                'create_by' => 'admin',
                'update_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'level' => 'Sub',
                'create_by' => 'admin',
                'update_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

    }
}
