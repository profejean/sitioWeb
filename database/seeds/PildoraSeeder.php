<?php

use App\Pildora;
use Illuminate\Database\Seeder;

class PildoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pildora::class, 1)->create();
    }
}
