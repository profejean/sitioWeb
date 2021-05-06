<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->text('resumen_titulo');
            $table->longText('resumen_texto_1')->nullable();
            $table->longText('resumen_texto_2')->nullable();
            $table->longText('resumen_texto_3')->nullable();
            $table->text('resumen_fecha');
            $table->text('resumen_fecha_final');
            $table->time('resumen_hora_ini');
            $table->text('resumen_img')->nullable();
            $table->text('pdf')->nullable();
            $table->text('video')->nullable();
            $table->text('ubicacion');
            $table->text('descripcion');

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
        Schema::dropIfExists('evento');
    }
}
