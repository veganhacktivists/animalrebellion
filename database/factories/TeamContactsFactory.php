<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TeamContact;
use Faker\Generator as Faker;

$factory->define(TeamContact::class, function (Faker $faker) {
    return [
        'team_name' => $faker->jobTitle,
        'email' => $faker->email,
    ];
});
