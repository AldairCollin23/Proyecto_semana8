<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Detallecita;
use Faker\Generator as Faker;

$factory->define(Detallecita::class, function (Faker $faker) {

    return [
        'cita' => $faker->word
    ];
});
