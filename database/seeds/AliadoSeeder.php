<?php

use App\Aliado;
use Illuminate\Database\Seeder;

class AliadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Aliado::class, 3)->create();
    }
}
