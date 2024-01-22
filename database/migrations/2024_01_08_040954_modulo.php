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
        Schema::create('modulo', function (Blueprint $table) {
            $table->id('idmodulo');
            $table->string('nombreModulo', 100);
            $table->text('descripcion');
            $table->unsignedBigInteger('idCurso');
            $table->unsignedBigInteger('idVideoPractica');
            $table->unsignedBigInteger('idEvaluacionModulo');

            $table->foreign('idCurso')->references('idCurso')->on('curso')
                  ->onDelete('no action')
                  ->onUpdate('no action');
            $table->foreign('idVideoPractica')->references('idVideoPractica')->on('video_practica')
                  ->onDelete('no action')
                  ->onUpdate('no action');
            $table->foreign('idEvaluacionModulo')->references('idEvaluacionModulo')->on('evaluacion_modulo')
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
        Schema::dropIfExists('modulo');
    }
};
