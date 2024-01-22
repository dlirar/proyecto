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
        Schema::create('grupo', function (Blueprint $table) {
            $table->id('idgrupo');
            $table->string('nombreGrupo', 45);
            $table->integer('cantidadMaximaAlumno');
            $table->integer('cantidadAlumnoInscrito');
            $table->unsignedBigInteger('idProfesor');
            $table->unsignedBigInteger('idCurso');

            $table->foreign('idProfesor')->references('idProfesor')->on('profesor')
                  ->onDelete('no action')
                  ->onUpdate('no action');
            $table->foreign('idCurso')->references('idCurso')->on('curso')
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
        Schema::dropIfExists('grupo');
    }
};
