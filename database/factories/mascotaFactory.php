<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\mascota;
use Faker\Generator as Faker;

$factory->define(mascota::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'nombre' => $faker->word,
        'raza' => $faker->word,
        'propietario' => $faker->word,
        'foto' => $faker->text,
        'fnacimiento' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
