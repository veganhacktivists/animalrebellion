<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'header' => $faker->sentence,
        'slug' => $faker->slug,
        'content' => $faker->paragraphs(3, true),
    ];
});
