<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pildora;
use Faker\Generator as Faker;

$factory->define(Pildora::class, function (Faker $faker) {
    return [
        'img'            => 'pildora.jpg',

        'usuario_editor' => 'Admin',
        'fecha_edicion'  => $faker->date(),
    ];
});
