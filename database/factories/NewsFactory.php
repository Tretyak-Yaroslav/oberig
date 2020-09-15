<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(\App\Models\News::class, function (Faker $faker) {

   // $faker = Faker::create('ru_RU');

    return [
        'title' => $faker->name,
        'title_ru' => $faker->name,
        'title_en' => $faker->name,
        'description' => $faker->realText,
        'description_ru' => $faker->realText,
        'description_en' => $faker->realText,
    ];
});
