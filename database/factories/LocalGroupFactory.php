<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\LocalGroup;
use Faker\Generator as Faker;

$factory->define(LocalGroup::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address1' => $faker->streetAddress,
        'address2' => $faker->optional()->secondaryAddress,
        'city' => $faker->city,
        'state_or_province' => $faker->optional()->state,
        'country' => $faker->country,
        'postal_code' => $faker->postcode,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'website_url' => $faker->optional()->url,
        'facebook_url' => $faker->optional()->url,
        'instagram_url' => $faker->optional()->url,
        'twitter_url' => $faker->optional()->url,
    ];
});
