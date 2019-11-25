<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetClassroomAttendeeTimepunchesTest extends TestCase
{
    /**
     * 
     *
     * @return void
     */
    public function testGetAllTimepunchesForClassroomAttendee()
    {
        $classroom = factory(\App\Classroom::class)->create();
        $attendee = $classroom->attendees()->create(['name'=>'Jane']);
        $timepunch = $attendee->timepunches()->create(['punch'=>'late', 'classroom_id'=>$classroom->id]);

        $response = $this->get("/api/classrooms/$classroom->id/attendees/$attendee->id/timepunches");

        $response->assertStatus(200)
        ->assertJsonCount(1);
    }
}
