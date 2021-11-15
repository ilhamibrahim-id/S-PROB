<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_user_can_register()
    {
        $this->get(route('register'))->assertStatus(200);
        $this->post(route('register'), [
            'firstname' => 'first',
            'lastname' => 'last',
            'email' => 'testemail@example.com',
            'password' => 'password',
        ]);
        $this->assertDatabaseHas('users', [
            'firstname' => 'first'
        ]);
    }

    public function test_user_cannot_register_with_same_email()
    {
        User::factory()->create(['email' => 'unique@email.com']);
        $this->get(route('register'))->assertStatus(200);
        $this->post(route('register'), [
            'firstname' => 'first',
            'lastname' => 'last',
            'email' => 'unique@email.com',
            'password' => 'password',
        ]);

        $this->assertDatabaseCount('users', 1);
    }

    public function test_user_can_login()
    {
        User::factory()->create(['email' => 'test@email.com']);
        $this->get(route('login'))->assertStatus(200);
        $this->post(route('login'), [
            'email' => 'test@email.com',
            'password' => 'password'
        ])->assertRedirect(RouteServiceProvider::HOME);
        $this->assertAuthenticated();
    }
}
