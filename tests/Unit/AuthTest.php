<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Mockery;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{


    /** @test */
    public function registerTest()
    {
        $request = Request::create('/register/post', 'POST', [
            'username' => 'unituser',
            'email' => 'unituser@example.com',
            'password' => 'password123',
            'no_hp' => '081234567890',
        ]);

        $controller = new AuthController();
        $response = $controller->register($request);

        $this->assertDatabaseHas('users', [
            'username' => 'unituser',
            'email' => 'unituser@example.com',
            'no_hp' => '081234567890',
            'jenis_user_id' => 2,
            'create_by' => 'system',
            'update_by' => 'system',
        ]);

        $this->assertEquals(302, $response->getStatusCode()); // 302 = redirect
        $this->assertEquals(route('loginview'), $response->headers->get('Location'));
    }
}