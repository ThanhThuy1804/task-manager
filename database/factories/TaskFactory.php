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

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id'=> $faker->randomDigitNotNull,
        'project_id' => $faker->randomDigitNotNull,
        'decription' => $faker->text($maxNbChars = 50),
        'delete_at' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
