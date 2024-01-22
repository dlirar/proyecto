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
        Schema::create('evaluacion_modulo', function (Blueprint $table) {
            $table->id('idEvaluacionModulo');
            $table->string('nombre');
            $table->text('ruta');
            $table->float('calificacion')->nullable();
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
        Schema::dropIfExists('evaluacion_modulo');
    }
};
