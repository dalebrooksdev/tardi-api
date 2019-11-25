<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = ['name'];

    public function classroom(){
        return $this->belongsTo('App\Classroom');
    }

    public function timepunches(){
        return $this->hasMany('App\Timepunch');
    }
}
