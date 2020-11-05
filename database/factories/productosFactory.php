<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\productos;
use Faker\Generator as Faker;

$factory->define(productos::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'foto' => $faker->text,
        'nombre' => $faker->word,
        'descripcion' => $faker->word,
        'precioVenta' => $faker->word,
        'preciocompra' => $faker->word,
        'stock' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
