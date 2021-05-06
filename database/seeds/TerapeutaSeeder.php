<?php

use App\Terapeuta;
use Illuminate\Database\Seeder;

class TerapeutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Terapeuta::class, 3)->create();
    }
}
