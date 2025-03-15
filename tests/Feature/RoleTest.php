<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\JenisUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Attributes\Test;

class RoleTest extends TestCase
{
    protected $admin;

    protected function setUp(): void
    {
        parent::setUp();

        DB::beginTransaction();

        // Buat role default
        JenisUser::firstOrCreate(['id' => 1, 'jenis_user' => 'Admin']);
        JenisUser::firstOrCreate(['id' => 2, 'jenis_user' => 'Customer']);

        // Buat admin user
        $this->admin = User::firstOrCreate([
            'username' => 'adminuser',
            'email' => 'admin@example.com',
            'no_hp' => '08123456789',
            'jenis_user_id' => 1,
        ], [
            'password' => bcrypt('password123'),
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

    /** @test */
    public function add()
    {
        $response = $this->post('/admin/role/add', [
            'jenis_user' => 'EO',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('jenis_users', [
            'jenis_user' => 'EO',
        ]);
    }

    /** @test */
    public function edit()
    {
        $role = JenisUser::create([
            'jenis_user' => 'OldRole',
            'create_by' => 'adminuser',
            'update_by' => 'adminuser',
        ]);

        $response = $this->put('/admin/role/edit/' . $role->id, [
            'jenis_user' => 'NewRole',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('jenis_users', [
            'id' => $role->id,
            'jenis_user' => 'NewRole',
        ]);
    }

    /** @test */
    public function remove()
    {
        $role = JenisUser::create([
            'jenis_user' => 'DeleteMe',
            'create_by' => 'adminuser',
            'update_by' => 'adminuser',
        ]);

        $response = $this->delete('/admin/role/delete/' . $role->id);

        $response->assertRedirect();
        $this->assertDatabaseMissing('jenis_users', [
            'id' => $role->id,
        ]);
    }
}
