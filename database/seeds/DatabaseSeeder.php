<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(InicioSeeder::class);
        $this->call(CarruselSeeder::class);
        $this->call(IdentidadSeeder::class);
        $this->call(AprendizajeSeeder::class);
        $this->call(EventoSeeder::class);
        $this->call(PildoraSeeder::class);
        $this->call(ArticuloSeeder::class);
        $this->call(ComentarioSeeder::class);
        $this->call(TerapeutaSeeder::class);
        $this->call(ApoyoSeeder::class);
        $this->call(AliadoSeeder::class);
    }
}
