<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_login_works()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
            'username' => 'Test User'
        ]);

        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);

        $this->assertAuthenticatedAs($user);
        $response->assertRedirect('/home');
    }

    public function test_login_fails_with_incorrect_credentials()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
            'username' => 'Test User'
        ]);

        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => 'wrongpassword',
        ]);

        $this->assertGuest();
        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_redirected_to_home()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
            'username' => 'Test User'
        ]);
        $this->actingAs($user);

        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);

        $response->assertRedirect('/home');
    }

    public function test_authenticated_user_can_access_protected_routes()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
            'username' => 'Test User'
        ]);
        $this->actingAs($user);

        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_logout_works()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
            'username' => 'Test User'
        ]);
        $this->actingAs($user);

        $response = $this->get('/logout');

        $this->assertGuest();
        $response->assertRedirect('/login');
    }
}
