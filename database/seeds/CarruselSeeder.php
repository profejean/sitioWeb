<?php

use App\Carrusel;
use Illuminate\Database\Seeder;

class CarruselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Carrusel::class, 1)->create();
    }
}
