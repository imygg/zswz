<?php

use Faker\Generator as Faker;
use App\Models\App;

$factory->define(App::class, function (Faker $faker) {
    return [
        'option_name' => $faker->word,
        'option_value' => $faker->word,
        'created_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
