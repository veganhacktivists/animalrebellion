<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Event;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    $startDate = $faker->dateTimeThisMonth;

    return [
        'name' => $faker->sentence,
        'start_date' => $startDate,
        'end_date' => Carbon::parse($startDate)->addDays(rand(0, 30)),
        'start_time' => $faker->time,
        'end_time' => $faker->time,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'country' => $faker->country,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'hosted_by' => $faker->name,
        'short_description' => $faker->paragraph,
        'full_description' => $faker->text,
        'image' => 'https://animalrebellion.org/wp-content/uploads/2020/02/Animal-Logo-No-Background-1-1536x855.png',
    ];
});

$factory->state(Event::class, Event::TYPE_MEETING, [
    'type' => Event::TYPE_MEETING,
]);

$factory->state(Event::class, Event::TYPE_TRAINING, [
    'type' => Event::TYPE_TRAINING,
]);

$factory->state(Event::class, Event::TYPE_TALK, [
    'type' => Event::TYPE_TALK,
]);
