<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PressContact;
use Faker\Generator as Faker;

$factory->define(PressContact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mobile_number' => $faker->e164PhoneNumber,
        'email' => $faker->email,
    ];
});
