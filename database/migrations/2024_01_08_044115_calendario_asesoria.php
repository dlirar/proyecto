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
        Schema::create('calendario_asesoria', function (Blueprint $table) {
            $table->id('idCalendarioAsesoria');
            $table->string('nombreSalaAsesoria', 45);
            $table->unsignedBigInteger('idAlumno');
            $table->unsignedBigInteger('idCalendarioProfesor');

            $table->foreign('idAlumno')->references('idAlumno')->on('alumno')
                  ->onDelete('no action')
                  ->onUpdate('no action');
            $table->foreign('idCalendarioProfesor')->references('idCalendarioProfesor')->on('calendario_profesor')
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
        Schema::dropIfExists('calendario_asesoria');
    }
};
