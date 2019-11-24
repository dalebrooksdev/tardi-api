<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Timepunch;
use Faker\Generator as Faker;

$factory->define(Timepunch::class, function (Faker $faker) {
    return [
        'attendee_id' => factory(App\Attendee::class),
        'classroom_id' => factory(App\Classroom::class),
        'punch' => $faker->title,
    ];
});
