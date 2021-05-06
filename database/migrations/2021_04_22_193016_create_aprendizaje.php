<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizaje', function (Blueprint $table) {
            $table->id();
            $table->text('titulo_alcance');
            $table->longText('texto_alcance');
            $table->text('titulo_descripcion');
            $table->longText('texto_descripcion');
            $table->text('titulo_metodologia');
            $table->longText('texto_metodologia');

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
        Schema::dropIfExists('aprendizaje');
    }
}
