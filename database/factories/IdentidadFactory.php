<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Identidad;
use Faker\Generator as Faker;

$factory->define(Identidad::class, function (Faker $faker) {
    return [
        'objetivo_titulo'         => $faker->name,
        'objetivo_texto_1'        => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'objetivo_texto_2'        => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'objetivo_texto_3'        => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'objetivo_check_1'        => $faker->text($maxNbChars = 200),
        'objetivo_check_2'        => $faker->text($maxNbChars = 200),
        'objetivo_check_3'        => $faker->text($maxNbChars = 200),
        'objetivo_imagen'         => 'juntos.png',
        'cantidad_check_objetivo' => 3,

        'mision_titulo'           => $faker->name,
        'mision_texto_1'          => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'mision_texto_2'          => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'mision_texto_3'          => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'mision_check_1'          => $faker->text($maxNbChars = 200),
        'mision_check_2'          => $faker->text($maxNbChars = 200),
        'mision_check_3'          => $faker->text($maxNbChars = 200),
        'mision_imagen'           => 'manos.jpg',
        'cantidad_check_mision'   => 3,

        'vision_titulo'           => $faker->name,
        'vision_texto_1'          => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'vision_texto_2'          => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'vision_texto_3'          => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'vision_check_1'          => $faker->text($maxNbChars = 200),
        'vision_check_2'          => $faker->text($maxNbChars = 200),
        'vision_check_3'          => $faker->text($maxNbChars = 200),
        'vision_imagen'           => 'meditacion.jpg',
        'cantidad_check_vision'   => 3,

        'usuario_editor'          => 'Admin',
        'fecha_edicion'           => $faker->date(),
    ];
});
