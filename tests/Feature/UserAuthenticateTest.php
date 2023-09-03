<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserAuthenticateTest extends TestCase
{
    /** @test */
    public function get_login(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /** @test */
    public function post_valid_login(): void 
    {
        $user = User::factory()->create();       

        $response = $this->post('/postlogin', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/');
    }

    /** @test */    
    public function test_post_invalid_login(): void
    {
        $user = User::factory()->create();

        $this->post('postlogin', [
            'email' => $user->email,
            'password' => 'Im-a-Wrong-password!'
        ]);

        $this->assertGuest();
    }
}
