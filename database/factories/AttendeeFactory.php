<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attendee;
use Faker\Generator as Faker;

$factory->define(Attendee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'classroom_id' => factory(App\Classroom::class),
    ];
});
