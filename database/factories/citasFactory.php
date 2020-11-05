<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\citas;
use Faker\Generator as Faker;

$factory->define(citas::class, function (Faker $faker) {

    return [
        'idCita' => $faker->randomDigitNotNull,
        'idUsuario' => $faker->randomDigitNotNull,
        'idMascota' => $faker->randomDigitNotNull,
        'idServicio' => $faker->randomDigitNotNull,
        'fecha' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
