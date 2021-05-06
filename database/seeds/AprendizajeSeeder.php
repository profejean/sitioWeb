<?php

use App\Aprendizaje;
use Illuminate\Database\Seeder;

class AprendizajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Aprendizaje::class, 1)->create();
    }
}
