<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Get the level IDs from the 'menu_levels' table
        $mainLevel = MenuLevel::where('level', 'Main')->first();
        $subLevel = MenuLevel::where('level', 'Sub')->first();

        // Insert the "Dashboard" parent menu
        $dashboardMenu = Menu::create([
            'id_level' => $mainLevel->id,
            'menu_name' => 'Dashboard',
            'menu_link' => '#',
            'menu_icon' => 'solar:atom-line-duotone',
            'delete_mark' => '0',
            'create_by' => 'admin',
            'update_by' => 'admin',
        ]);

        // Insert "Dashboard 1" submenu under "Dashboard"
        Menu::create([
            'id_level' => $subLevel->id,
            'menu_name' => 'Dashboard 1',
            'menu_link' => '../dark/index.html',
            'menu_icon' => '',
            'parent_id' => $dashboardMenu->id,
            'delete_mark' => '0',
            'create_by' => 'admin',
            'update_by' => 'admin',
        ]);

        // Insert "Dashboard 2" submenu under "Dashboard"
        Menu::create([
            'id_level' => $subLevel->id,
            'menu_name' => 'Dashboard 2',
            'menu_link' => '../dark/index2.html',
            'menu_icon' => '',
            'parent_id' => $dashboardMenu->id,
            'delete_mark' => '0',
            'create_by' => 'admin',
            'update_by' => 'admin',
        ]);
        
        // Insert the "Master" parent menu
        $masterMenu = Menu::create([
            'id_level' => $mainLevel->id,
            'menu_name' => 'Master',
            'menu_link' => '#',
            'menu_icon' => 'solar:tuning-square-line-duotone',
            'delete_mark' => '0',
            'create_by' => 'admin',
            'update_by' => 'admin',
        ]);

        // Insert "User" submenu under "Master"
        Menu::create([
            'id_level' => $subLevel->id,
            'menu_name' => 'User',
            'menu_link' => '/admin/user',
            'menu_icon' => '',
            'parent_id' => $masterMenu->id,
            'delete_mark' => '0',
            'create_by' => 'admin',
            'update_by' => 'admin',
        ]);

        // Insert "Role" submenu under "Master"
        Menu::create([
            'id_level' => $subLevel->id,
            'menu_name' => 'Role',
            'menu_link' => '/admin/role',
            'menu_icon' => '',
            'parent_id' => $masterMenu->id,
            'delete_mark' => '0',
            'create_by' => 'admin',
            'update_by' => 'admin',
        ]);

    }
}
