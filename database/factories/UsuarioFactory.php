<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {

    return [
        'apellido' => $faker->word,
        'nombre' => $faker->word,
        'usuario' => $faker->word,
        'password' => $faker->word
    ];
});
