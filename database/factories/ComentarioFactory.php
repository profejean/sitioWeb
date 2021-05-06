<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentario;
use Faker\Generator as Faker;

$factory->define(Comentario::class, function (Faker $faker) {
    return [
        'articulo_id' => 1,
        'comentario'  => $faker->sentence($nbWords = 100, $variableNbWords = true),
        'usuario'     => $faker->name,
        'hora'        => $faker->time($format = 'H:i:s', $max = 'now'),
        'fecha'       => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
