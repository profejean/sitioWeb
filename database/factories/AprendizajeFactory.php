<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aprendizaje;
use Faker\Generator as Faker;

$factory->define(Aprendizaje::class, function (Faker $faker) {
    return [

        'titulo_alcance'     => 'ALCANCE',
        'texto_alcance'      => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'titulo_descripcion' => 'DESCRIPCIÓN',
        'texto_descripcion'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'titulo_metodologia' => 'METODOLOGÍA',
        'texto_metodologia'  => $faker->sentence($nbWords = 6, $variableNbWords = true),

        'usuario_editor'     => 'Admin',
        'fecha_edicion'      => $faker->date(),
    ];
});
