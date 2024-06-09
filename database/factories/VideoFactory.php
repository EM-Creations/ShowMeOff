<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(20),
        'video' => $faker->imageUrl(),
        'likes' => $faker->numberBetween(0, 100),
        'type' => "youtube",
        'added_by' => $faker->numberBetween(1, 5)
    ];
});
