<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_tasks_can_be_created()
    {
        $user = User::factory()->create(['username' => 'Other User For Task Test','password' => 'password']);

        $response = $this->actingAs($user)->post('/tasks', [
            'title' => 'Test Task',
            'body' => 'Test Description',
        ]);

        $response->assertRedirect('/home');
        $this->assertDatabaseHas('tasks', [
            'title' => 'Test Task',
            'body' => 'Test Description',
        ]);
    }
}