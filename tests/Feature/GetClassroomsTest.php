<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetClassroomsTest extends TestCase
{
    /**
     * 
     *
     * @return void
     */
    public function testGetAllClassrooms()
    {
        $response = $this->get('/api/classrooms');

        $response->assertStatus(200);
    }
}
