<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timepunch extends Model
{
    protected $fillable = ['punch','classroom_id'];
    
    public function attendee(){
        return $this->belongsTo('App\Attendee');
    }

    public function classroom(){
        return $this->belongsTo('App\Classroom');
    }
}
