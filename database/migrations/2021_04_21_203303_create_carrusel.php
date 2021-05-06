<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrusel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrusel', function (Blueprint $table) {
            $table->id();
            for ($i = 1; $i <= 3; $i++) {
                $table->text('img_' . $i)->nullable();
                $table->text('titulo_' . $i);
                $table->longText('contenido_' . $i);
            }

            $table->text('usuario_editor');
            $table->date('fecha_edicion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrusel');
    }
}
