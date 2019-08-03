<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Leader;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Leader::class, function (Faker $faker) {
    $sectors = \App\Sector::all();
    return [
        'cedula' => $faker->numberBetween($min=1000000,$max=1099999999),
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'sector_id' => $faker->numberBetween($min=1,$max= count($sectors)),
    ];
});

