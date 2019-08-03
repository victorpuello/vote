<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Voter;
use Faker\Generator as Faker;

$factory->define(Voter::class, function (Faker $faker) {
    $sectors = \App\Sector::all()->count();
    $leaders = \App\Leader::all()->count();
    $points = \App\Point::all()->count();
    return [
        'cedula' => $faker->numberBetween($min=1000000,$max=1099999999),
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'sector_id' => $faker->numberBetween($min=1,$max= $sectors),
        'leader_id' => $faker->numberBetween($min=1,$max= $leaders),
        'point_id' => $faker->numberBetween($min=1,$max= $points),
        'table_number' => $faker->numberBetween($min=1,$max= 8),
        'sufrago' => $faker->boolean
    ];
});
