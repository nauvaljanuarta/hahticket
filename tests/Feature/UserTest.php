<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\JenisUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Attributes\Test;

class UserTest extends TestCase
{
    protected $admin;
    #[Test]
    protected function setUp(): void
    {
        parent::setUp();

        DB::beginTransaction();

        // Buat data master di sini, bukan di setUpBeforeClass()
        JenisUser::firstOrCreate(['id' => 1, 'jenis_user' => 'Admin']);
        JenisUser::firstOrCreate(['id' => 2, 'jenis_user' => 'Customer']);

        // Buat admin user untuk login
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
    #[Test]
    public function add()
    {
        $response = $this->post('/admin/user/add', [
            'username' => 'newuser',
            'email' => 'newuser@example.com',
            'password' => 'password123',
            'no_hp' => '0811111111',
            'jenis_user_id' => 2,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('users', [
            'username' => 'newuser',
            'email' => 'newuser@example.com',
        ]);
    }
    #[Test]
    public function edit()
    {
        $user = User::create([
            'username' => 'olduser',
            'email' => 'olduser@example.com',
            'password' => Hash::make('password123'),
            'no_hp' => '08123456789',
            'jenis_user_id' => 2,
            'create_by' => 'adminuser',
            'update_by' => 'adminuser',
        ]);

        $response = $this->put('/admin/user/edit/' . $user->id, [
            'username' => 'updateduser',
            'email' => 'updateduser@example.com',
            'no_hp' => '0812222333',
            'jenis_user_id' => 2,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('users',
        [
            'id' => $user->id,
            'username' => 'updateduser',
            'email' => 'updateduser@example.com',
            'no_hp' => '0812222333',
        ]);
    }
    #[Test]
    public function remove()
    {
        $user = User::create([
            'username' => 'deleteuser',
            'email' => 'deleteuser@example.com',
            'password' => Hash::make('password123'),
            'no_hp' => '08133334444',
            'jenis_user_id' => 2,
            'create_by' => 'adminuser',
            'update_by' => 'adminuser',
        ]);

        $response = $this->delete('/admin/user/delete/' . $user->id);

        $response->assertRedirect();
        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }
}