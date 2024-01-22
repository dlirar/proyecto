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
        Schema::create('alumno_grupo', function (Blueprint $table) {
            $table->unsignedBigInteger('idAlumno');
            $table->unsignedBigInteger('idGrupo');
            $table->primary(['idAlumno', 'idGrupo']); // Define una clave primaria compuesta

            $table->foreign('idAlumno')->references('idAlumno')->on('alumno')
                  ->onDelete('no action')
                  ->onUpdate('no action');
            $table->foreign('idGrupo')->references('idgrupo')->on('grupo')
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
        Schema::dropIfExists('alumno_grupo');
    }
};
