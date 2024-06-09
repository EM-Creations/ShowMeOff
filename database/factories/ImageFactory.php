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

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(20),
        'image' => $faker->imageUrl(),
        'caption' => $faker->slug(),
        'likes' => $faker->numberBetween(0, 100),
        'gallery_id' => $faker->numberBetween(1, 3),
        'added_by' => $faker->numberBetween(1, 5)
    ];
});
