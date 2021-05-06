<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inicio;
use Faker\Generator as Faker;

$factory->define(Inicio::class, function (Faker $faker) {
    return [
        'tlf'            => '+1 5589 55488 55',
        'dias_trabajo'   => 'Mon-Sat',
        'apertura'       => '8:00 AM',
        'cierre'         => '23:00 PM',
        'info'           => 'Si',
        'usuario_editor' => 'Admin',
        'fecha_edicion'  => $faker->date(),
    ];
});
