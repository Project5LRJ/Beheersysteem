<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    Use RefreshDatabase;
    public function testUserStore()
    {
        //Arange
        $this->seed();
        $user = User::factory()->create();

        //Act
        $this->actingAs($user)->post(route('users.store'), [
            'name' => 'testusername',
            'email' => 'test@domein.nl',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        //Assert
        $this->assertDatabaseHas('users', ['name' => 'testusername', 'email' => 'test@domein.nl']);
    }
}
