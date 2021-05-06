<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerapeuta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terapeuta', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->text('nombre');
            $table->text('especialidad');
            $table->text('email');
            $table->text('tlf');
            $table->text('img');
            $table->text('facebook');
            $table->text('linkedin');
            $table->text('twitter');
            $table->text('instagram');
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
        Schema::dropIfExists('terapeuta');
    }
}
