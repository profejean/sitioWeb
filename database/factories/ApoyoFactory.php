<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apoyo;
use Faker\Generator as Faker;

$factory->define(Apoyo::class, function (Faker $faker) {
    return [
        'slug'           => Str::slug($faker->slug, '-'),
        'nombre'         => $faker->name,
        'descripcion'    => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'img'            => 'apoyo2.jpg',
        'usuario_editor' => 'Admin',
        'fecha_edicion'  => $faker->date(),
    ];
});
