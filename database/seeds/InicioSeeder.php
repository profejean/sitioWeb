<?php

use App\Inicio;
use Illuminate\Database\Seeder;

class InicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Inicio::class, 1)->create();
    }
}
