<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'slug'           => Str::slug($faker->slug, '-'),
        'titulo'         => $faker->name,
        'contenido_1'    => $faker->sentence($nbWords = 100, $variableNbWords = true),
        'contenido_2'    => $faker->sentence($nbWords = 100, $variableNbWords = true),
        'contenido_3'    => $faker->sentence($nbWords = 100, $variableNbWords = true),

        'contenido_4'    => $faker->sentence($nbWords = 120, $variableNbWords = true),
        'contenido_5'    => $faker->sentence($nbWords = 120, $variableNbWords = true),
        'contenido_6'    => $faker->sentence($nbWords = 120, $variableNbWords = true),
        'resumen'        => $faker->sentence($nbWords = 60, $variableNbWords = true),

        'img'            => 'gallery-1.jpg',
        'img_2'          => 'gallery-2.jpg',
        'usuario_editor' => 'Admin',
        'fecha_edicion'  => $faker->date(),

    ];
});
