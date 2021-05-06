<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aliado;
use Faker\Generator as Faker;

$factory->define(Aliado::class, function (Faker $faker) {
    return [
        'slug'           => Str::slug($faker->slug, '-'),
        'nombre'         => $faker->name,
        'descripcion'    => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'img'            => 'pixabay.jpg',
        'usuario_editor' => 'Admin',
        'fecha_edicion'  => $faker->date(),
    ];
});
