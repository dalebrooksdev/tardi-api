<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public function attendees(){
        return $this->hasMany('App\Attendee');
    }
    public function timepunches(){
        return $this->hasMany('App\Timepunch');
    }
}
