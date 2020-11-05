<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\servicio;
use Faker\Generator as Faker;

$factory->define(servicio::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'tipoServicio' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
