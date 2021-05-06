<?php

use App\Apoyo;
use Illuminate\Database\Seeder;

class ApoyoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Apoyo::class, 3)->create();
    }
}
