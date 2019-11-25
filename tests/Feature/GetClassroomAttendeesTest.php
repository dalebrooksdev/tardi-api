<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetClassroomAttendeesTest extends TestCase
{
    /**
     * 
     *
     * @return void
     */
    public function testGetAllAttendeesAfterAddingToClassroom()
    {
        $classroom = factory(\App\Classroom::class)->create();
        $classroom->attendees()->create(['name'=>'Jane']);
        $classroom->attendees()->create(['name'=>'John']);
        $classroom->attendees()->create(['name'=>'Carl']);
        $classroom->attendees()->create(['name'=>'Zane']);

        $response = $this->get("/api/classrooms/$classroom->id/attendees");

        $response->assertStatus(200)
        ->assertJsonCount(4);
    }
}
