<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\raza;
use Faker\Generator as Faker;

$factory->define(raza::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'raza' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
