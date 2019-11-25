<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisteredUserCanLogInTest extends TestCase
{
    use WithFaker;
    /**
     * .
     *
     * @return void
     */
    public function testRegisteredUserCanLogIn()
    {
        $email = $this->faker->safeEmail();
        $this->json('POST', '/api/register', [
            'email' => $email,
            'password' => 'password',
            'name' => 'Mr. Test'
        ]);

        $response = $this->json('POST', '/api/login', [
            'username' => $email,
            'password' => 'password',
        ]);


        $response->assertStatus(200)
        ->assertJson([
            'token_type' => 'Bearer'
        ]);
    }
}
