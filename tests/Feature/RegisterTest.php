<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_registration_works()
    {
        $response = $this->post('/register', [
            'name' => 'Test Name',
            'username' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/login');
        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }

    public function test_registration_requires_unique_username()
    {
        User::factory()->create(['username' => 'Other User']);

        $response = $this->post('/register', [
            'name' => 'Other Name',
            'username' => 'Other User',
            'email' => 'other@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertSessionHasErrors(['username']);
    }
}
