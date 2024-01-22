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
        Schema::create('leccion_evidencia_alumno', function (Blueprint $table) {
            $table->id('idEvidenciaAlumno');
            $table->string('nombre', 100);
            $table->text('ruta');
            $table->float('calificacion')->nullable();
            $table->unsignedBigInteger('idLeccion');
            $table->unsignedBigInteger('idAlumno');

            $table->foreign('idLeccion')->references('idLeccion')->on('leccion')
                  ->onDelete('no action')
                  ->onUpdate('no action');
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
        Schema::dropIfExists('leccion_evidencia_alumno');
    }
};
