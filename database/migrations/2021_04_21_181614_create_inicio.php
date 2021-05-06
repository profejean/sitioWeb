<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicio', function (Blueprint $table) {
            $table->id();
            $table->text('tlf');
            $table->text('dias_trabajo');
            $table->text('apertura');
            $table->text('cierre');
            $table->text('info');
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
        Schema::dropIfExists('inicio');
    }
}
