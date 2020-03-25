<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'url' => $faker->url,
        'blurb' => $faker->optional()->paragraph,
        'publication_date' => $faker->optional()->date,
        'source' => $faker->optional()->url,
        'primary_author' => $faker->optional()->name,
        'secondary_author' => $faker->optional()->name,
    ];
});
