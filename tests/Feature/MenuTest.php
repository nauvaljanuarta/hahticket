<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\MenuLevel;
use App\Models\JenisUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Attributes\Test;

class MenuTest extends TestCase
{
    protected $admin;
    protected $menuLevel;
    protected function setUp(): void
    {
        parent::setUp();

        DB::beginTransaction();
        $this->seed(\Database\Seeders\MenuLevelSeeder::class);

        $this->menuLevel = MenuLevel::where('level', 'Main')->first();

        // Buat JenisUser
        $jenisUser = JenisUser::create([
            'jenis_user' => 'Admin',
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        // Buat admin user
        $this->admin = User::create([
            'username' => 'adminuser',
            'email' => 'admin@faker.com',
            'no_hp' => '0851554789',
            'create_by' => 'admin',
            'update_by' => 'admin',
            'password' => Hash::make('password123'),
            'jenis_user_id' => $jenisUser->id,
        ]);

        // Login sebagai admin
        $this->actingAs($this->admin);
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        parent::tearDown();
    }

    #[Test]
    public function can_add_menu()
    {
        $response = $this->post(route('menu.store'), [
            'menu_name' => 'Dashboard',
            'menu_link' => '/dashboard',
            'menu_icon' => 'icon-dashboard',
            'parent_id' => null,
            'id_level' => $this->menuLevel->id,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('menus', [
            'menu_name' => 'Dashboard',
            'menu_link' => '/dashboard',
            'menu_icon' => 'icon-dashboard',
            'id_level' => $this->menuLevel->id,
        ]);
    }

    #[Test]
    public function can_edit_menu()
    {
        // Buat menu awal
        $menu = Menu::create([
            'menu_name' => 'Old Menu',
            'menu_link' => '/old-link',
            'menu_icon' => 'old-icon',
            'parent_id' => null,
            'id_level' => $this->menuLevel->id,
            'create_by' => 'adminuser',
            'update_by' => 'adminuser',
            'delete_mark' => 0,
        ]);

        $response = $this->put(route('menu.update', ['id' => $menu->id]), [
            'menu_name' => 'Updated Menu',
            'menu_link' => '/updated-link',
            'menu_icon' => 'updated-icon',
            'parent_id' => null,
            'id_level' => $this->menuLevel->id,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('menus', [
            'id' => $menu->id,
            'menu_name' => 'Updated Menu',
            'menu_link' => '/updated-link',
            'menu_icon' => 'updated-icon',
        ]);
    }

    /** @test */
    public function can_delete_menu()
    {
        // Buat menu awal
        $menu = Menu::create([
            'menu_name' => 'Delete Menu',
            'menu_link' => '/delete-link',
            'menu_icon' => 'delete-icon',
            'parent_id' => null,
            'id_level' => $this->menuLevel->id,
            'create_by' => 'adminuser',
            'update_by' => 'adminuser',
            'delete_mark' => 0,
        ]);

        $response = $this->delete(route('menu.destroy', ['id' => $menu->id]));

        $response->assertRedirect();
        $this->assertDatabaseMissing('menus', [
            'id' => $menu->id,
        ]);
    }
}