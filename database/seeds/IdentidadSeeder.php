<?php

use App\Identidad;
use Illuminate\Database\Seeder;

class IdentidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Identidad::class, 1)->create();
    }
}
