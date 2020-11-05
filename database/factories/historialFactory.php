<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\historial;
use Faker\Generator as Faker;

$factory->define(historial::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'fecha' => $faker->word,
        'servicio' => $faker->word,
        'descripcion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
