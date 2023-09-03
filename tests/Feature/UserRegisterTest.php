<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserRegisterTest extends TestCase
{

    use WithFaker;
    
    /** @test */
    public function get_user_register()
    {   

        $user = User::factory()->create();       

        $this->post('/postlogin', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();
        
        $response = $this->post('/post_registreer', [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => $this->faker->password($minlenght = 6)
        ]);

    }
}
