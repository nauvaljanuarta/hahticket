<?php

namespace Tests\Unit;

use Tests\TestCase;
use Mockery;
use App\Models\User;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserTest extends TestCase
{
    protected $loggedInUser;

    protected function setUp(): void
    {
        parent::setUp();

        // Gunakan Mockery::mock() bukan mock()
        $this->loggedInUser = Mockery::mock(User::class);
        $this->loggedInUser->username = 'adminuser';

        Auth::shouldReceive('user')->andReturn($this->loggedInUser);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    /** @test */
    public function store_creates_new_user()
    {
        $request = Request::create('/users', 'POST', [
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => 'password123',
            'no_hp' => '08123456789',
            'jenis_user_id' => 2,
        ]);

        User::shouldReceive('create')
            ->once()
            ->with(Mockery::on(function ($data) {

                return $data['username'] === 'testuser'
                    && $data['email'] === 'test@example.com'
                    && $data['no_hp'] === '08123456789'
                    && $data['jenis_user_id'] === 2
                    && $data['create_by'] === 'adminuser'
                    && $data['update_by'] === 'adminuser'
                    && isset($data['password']);  // Password hanya dicek apakah ada
            }));

        $controller = new UserController();
        $response = $controller->store($request);

        $this->assertEquals(302, $response->getStatusCode());
    }

    /** @test */
    public function update_edits_existing_user()
    {
        $user = Mockery::mock(User::class)->makePartial();

        $user->shouldReceive('update')
            ->once()
            ->with(Mockery::on(function ($data) {
                return $data['username'] === 'updateduser'
                    && $data['email'] === 'updated@example.com'
                    && $data['no_hp'] === '08123456780'
                    && $data['jenis_user_id'] === 3
                    && $data['update_by'] === 'adminuser';
            }));

        User::shouldReceive('findOrFail')->with(1)->andReturn($user);

        $request = Request::create('/users/1', 'PUT', [
            'username' => 'updateduser',
            'email' => 'updated@example.com',
            'no_hp' => '08123456780',
            'jenis_user_id' => 3,
        ]);

        $controller = new UserController();
        $response = $controller->update($request, 1);

        $this->assertEquals(302, $response->getStatusCode());
    }

    /** @test */
    public function destroy_deletes_user()
    {
        $user = Mockery::mock(User::class);

        $user->shouldReceive('delete')->once();

        User::shouldReceive('findOrFail')->with(1)->andReturn($user);

        $controller = new UserController();
        $response = $controller->destroy(1);

        $this->assertEquals(302, $response->getStatusCode());
    }
}