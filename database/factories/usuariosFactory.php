<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\usuarios;
use Faker\Generator as Faker;

$factory->define(usuarios::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'foto' => $faker->text,
        'nombre' => $faker->word,
        'rol' => $faker->randomDigitNotNull,
        'email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
