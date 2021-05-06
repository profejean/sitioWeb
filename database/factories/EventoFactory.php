<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {
    return [
        'slug'                => Str::slug($faker->slug, '-'),
        'resumen_titulo'      => $faker->name,
        'resumen_texto_1'     => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'resumen_texto_2'     => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'resumen_texto_3'     => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'descripcion'         => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'ubicacion'           => $faker->name,

        'resumen_fecha'       => $faker->date($format = 'Y-m-d', $max = 'now'),
        'resumen_fecha_final' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'resumen_hora_ini'    => $faker->time($format = 'H:i:s', $max = 'now'),
        'resumen_img'         => 'evento.jpg',
        'pdf'                 => 'pdf.pdf',
        'video'               => 'video.mp4',

        'usuario_editor'      => 'Admin',
        'fecha_edicion'       => $faker->date(),

    ];
});
