<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cita;
use Faker\Generator as Faker;

$factory->define(Cita::class, function (Faker $faker) {

    return [
        'paciente' => $faker->word,
        'fecha' => $faker->word,
        'doctor' => $faker->word
    ];
});
