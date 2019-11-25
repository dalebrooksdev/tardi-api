<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserCanRegisterTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanRegister()
    {   
        $email = $this->faker->safeEmail();
        $response = $this->json('POST', '/api/register', [
            'email' => $email,
            'password' => 'password',
            'name' => 'Mr. Test'
        ]);

        $response->assertStatus(201);
    }
}
