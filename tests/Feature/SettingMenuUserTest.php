<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\JenisUser;
use App\Models\Menu;
use App\Models\SettingMenuUser;
use Illuminate\Support\Facades\DB;

class SettingMenuUserTest extends TestCase
{
    protected $admin;
    protected function setUp(): void
    {
        parent::setUp();

        DB::beginTransaction();

        // Buat Role dan User Admin
        $role = JenisUser::create(['jenis_user' => 'Admin']);
        $this->admin = User::create([
            'username' => 'adminuser',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
            'no_hp' => '08123456789',
            'jenis_user_id' => $role->id,
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        // Buat beberapa menu
        Menu::create(['nama_menu' => 'Dashboard', 'route' => '/dashboard']);
        Menu::create(['nama_menu' => 'User Management', 'route' => '/users']);
        Menu::create(['nama_menu' => 'Settings', 'route' => '/settings']);

        $this->actingAs($this->admin);
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        parent::tearDown();
    }

    /** @test */
    public function view_page()
    {
        $role = JenisUser::create([
            'jenis_user' => 'Customer',
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        $response = $this->get('/admin/role/' . $role->id . '/setting');
        $response->assertStatus(200);
        $response->assertViewIs('admin.setting');
        $response->assertViewHas('role');
        $response->assertViewHas('menulist');
        $response->assertViewHas('menus');
        $response->assertViewHas('assignedMenus');
    }

    /** @test */
    public function update()
    {
        $role = JenisUser::create([
            'jenis_user' => 'Customer',
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        $menu1 = Menu::where('nama_menu', 'Dashboard')->first();
        $menu2 = Menu::where('nama_menu', 'User Management')->first();

        $response = $this->post('/admin/role/' . $role->id . '/setting/update', [
            'menus' => [$menu1->id, $menu2->id],
        ]);

        $response->assertRedirect('/admin/role');
        $response->assertSessionHas('success', 'Menus updated successfully');

        $this->assertDatabaseHas('setting_menu_users', [
            'id_jenis_user' => $role->id,
            'menu_id' => $menu1->id,
        ]);
        $this->assertDatabaseHas('setting_menu_users', [
            'id_jenis_user' => $role->id,
            'menu_id' => $menu2->id,
        ]);
    }

    /** @test */
    public function update_fails_without_menu()
    {
        $role = JenisUser::create([
            'jenis_user' => 'Customer',
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        $response = $this->post('/admin/role/' . $role->id . '/setting/update', [
            'menus' => [],
        ]);

        $response->assertSessionHasErrors(['menus']);
    }
}