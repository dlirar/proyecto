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
        Schema::create('conocimiento_previo', function (Blueprint $table) {
            $table->id('idConocimientoPrevio');
            $table->date('fecha_realizacion');
            $table->unsignedBigInteger('idAlumno');

            $table->foreign('idAlumno')->references('idAlumno')->on('alumno')
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
        Schema::dropIfExists('conocimiento_previo');
    }
};
