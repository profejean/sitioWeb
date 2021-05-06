<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->text('titulo');
            $table->text('resumen');
            $table->longText('contenido_1');
            $table->longText('contenido_2');
            $table->longText('contenido_3');
            $table->longText('contenido_4');
            $table->longText('contenido_5');
            $table->longText('contenido_6');
            $table->text('img');
            $table->text('img_2');

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
        Schema::dropIfExists('articulo');
    }
}
