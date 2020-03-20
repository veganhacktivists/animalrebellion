<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\LocalGroup;
use Faker\Generator as Faker;

$factory->define(LocalGroup::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address1' => $faker->streetAddress,
        'address2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state_or_province' => $faker->state,
        'country' => $faker->country,
        'postal_code' => $faker->postcode,
    ];
});
