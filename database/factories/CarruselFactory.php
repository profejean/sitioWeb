<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Carrusel;
use Faker\Generator as Faker;

$factory->define(Carrusel::class, function (Faker $faker) {
    return [
        'img_1'          => 'tierra.jpg',
        'titulo_1'       => 'Conciencia Global',
        'contenido_1'    => 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.',

        'img_2'          => 'sunset.jpg',
        'titulo_2'       => 'Viendo el Horizonte',
        'contenido_2'    => 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.',

        'img_3'          => 'moons.jpg',
        'titulo_3'       => 'Uno con la Naturaleza',
        'contenido_3'    => 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.',

        'usuario_editor' => 'Admin',
        'fecha_edicion'  => $faker->date(),
    ];
});
