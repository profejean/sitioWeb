<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Terapeuta;
use Faker\Generator as Faker;

$factory->define(Terapeuta::class, function (Faker $faker) {
    return [
        'slug'           => Str::slug($faker->slug, '-'),
        'nombre'         => $faker->name,
        'especialidad'   => $faker->name,
        'email'          => $faker->email,
        'tlf'            => $faker->phoneNumber,
        'img'            => 'terapeuta.jpg',
        'facebook'       => $faker->name,
        'linkedin'       => $faker->name,
        'twitter'        => $faker->name,
        'instagram'      => $faker->name,
        'usuario_editor' => 'Admin',
        'fecha_edicion'  => $faker->date(),

    ];

});
