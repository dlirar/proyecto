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
        Schema::create('calendario_profesor', function (Blueprint $table) {
            $table->id('idCalendarioProfesor');
            $table->date('fecha');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->boolean('disponible')->default(true);
            $table->unsignedBigInteger('idProfesor');
            
            $table->foreign('idProfesor')->references('idProfesor')->on('profesor')
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
        Schema::dropIfExists('calendario_profesor');
    }
};
