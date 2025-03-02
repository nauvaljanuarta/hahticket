<?php
namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /** @test */
    public function admin_login()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '1234',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertAuthenticated();
    }

    /** @test */
    public function customer_login()
    {
        $response = $this->post('/login', [
            'email' => 'customer1@gmail.com',
            'password' => '1234',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();
    }

    /** @test */
    public function organizer_login()
    {
        $response = $this->post('/login', [
            'email' => 'organizer1@gmail.com',
            'password' => '1234',
        ]);

        $response->assertRedirect('/event/dashboard');
        $this->assertAuthenticated();
    }

    /** @test */
    public function wrong_login()
    {
        $response = $this->post('/login', [
            'email' => 'salah@gmail.com',
            'password' => 'salah123',
        ]);

        $response->assertSessionHasErrors(['login_error' => 'Invalid credentials']);
        $this->assertGuest();
    }
}