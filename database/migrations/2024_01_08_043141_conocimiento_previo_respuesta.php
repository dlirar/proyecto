<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('conocimiento_previo_respuesta', function (Blueprint $table) {
            $table->id('idConocimientoPrevioRespuesta');
            $table->text('respuestaAlumno');
            $table->unsignedBigInteger('idConocimientoPrevio');
            $table->unsignedBigInteger('idConocimientoPrevioPregunta');

            $table->foreign('idConocimientoPrevio', 'fk_conoc_previo') // Nombre corto para la clave foránea
                ->references('idConocimientoPrevio')->on('conocimiento_previo')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('idConocimientoPrevioPregunta', 'fk_conoc_previo_pregunta') // Nombre corto para la clave foránea
                ->references('idConocimientoPrevioPregunta')->on('conocimiento_previo_pregunta')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->timestamps();  // Opcional: añade las columnas created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conocimiento_previo_respuesta');
    }
};
