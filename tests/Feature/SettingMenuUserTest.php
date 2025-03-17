<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\JenisUser;
use App\Models\Menu;
use App\Models\SettingMenuUser;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\Test;

class SettingMenuUserTest extends TestCase
{
    protected $admin;

    protected function setUp(): void
    {
        parent::setUp();

        DB::beginTransaction();

        // Buat Role dan User Admin
        $role = $this->createRole('Admin');

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
        Menu::create([
            'id_level' => 1,
            'menu_name' => 'User Management',
            'menu_link' => '/users',
            'menu_icon' => 'icon-users',
            'parent_id' => null,
            'delete_mark' => 'N',
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        Menu::create([
            'id_level' => 1,
            'menu_name' => 'Settings',
            'menu_link' => '/settings',
            'menu_icon' => 'icon-settings',
            'parent_id' => null,
            'delete_mark' => 'N',
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        $this->actingAs($this->admin);
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        parent::tearDown();
    }

    /**
     * Helper untuk membuat role biar tidak perlu tulis berulang.
     */
    private function createRole(string $jenisUser): JenisUser
    {
        return JenisUser::create([
            'jenis_user' => $jenisUser,
            'create_by' => 'system',
            'update_by' => 'system',
        ]);
    }

    #[Test]
    public function view_page()
    {
        $role = $this->createRole('Customer');

        $response = $this->get('/admin/' . $role->id . '/settings');

        $response->assertStatus(200);
        $response->assertViewIs('admin.setting');
        $response->assertViewHas('role');
        $response->assertViewHas('menulist');
        $response->assertViewHas('menus');
        $response->assertViewHas('assignedMenus');
    }

    #[Test]
    public function update()
    {
        $role = $this->createRole('Customer');

        $menu1 = Menu::where('menu_name', 'Dashboard')->first();
        $menu2 = Menu::where('menu_name', 'User Management')->first();

        $response = $this->put('/admin/' . $role->id . '/menus', [
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

    #[Test]
    public function update_fails_without_menu()
    {
        $role = $this->createRole('Customer');

        $response = $this->put('/admin/' . $role->id . '/menus', [
            'menus' => [],
        ]);


        $response->assertSessionHasErrors(['menus']);
    }
}