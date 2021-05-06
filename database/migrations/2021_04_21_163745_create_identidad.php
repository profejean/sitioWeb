<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identidad', function (Blueprint $table) {
            $table->id();
            $table->text('mision_titulo');
            $table->text('mision_texto_1');
            $table->text('mision_texto_2');
            $table->text('mision_texto_3');
            $table->text('mision_check_1');
            $table->text('mision_check_2');
            $table->text('mision_check_3');
            $table->text('mision_imagen')->nullable();

            $table->text('vision_titulo');
            $table->text('vision_texto_1');
            $table->text('vision_texto_2');
            $table->text('vision_texto_3');
            $table->text('vision_check_1');
            $table->text('vision_check_2');
            $table->text('vision_check_3');
            $table->text('vision_imagen')->nullable();

            $table->text('objetivo_titulo');
            $table->text('objetivo_texto_1');
            $table->text('objetivo_texto_2');
            $table->text('objetivo_texto_3');
            $table->text('objetivo_check_1');
            $table->text('objetivo_check_2');
            $table->text('objetivo_check_3');
            $table->text('objetivo_imagen')->nullable();

            $table->integer('cantidad_check_vision');
            $table->integer('cantidad_check_mision');
            $table->integer('cantidad_check_objetivo');

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
        Schema::dropIfExists('identidad');
    }
}
