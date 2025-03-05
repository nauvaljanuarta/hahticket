<?php
namespace Tests\Unit;

use Tests\TestCase;

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Test;

class AuthTest extends TestCase
{

    #[Test]
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