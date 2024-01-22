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
        Schema::create('leccion', function (Blueprint $table) {
            $table->id('idLeccion');
            $table->string('nombreLeccion', 100);
            $table->text('descripcion');
            $table->string('nombreVideo');
            $table->string('videoLeccionRuta');
            //$table->unsignedBigInteger('idModulo');
            //$table->unsignedBigInteger('idVideoGeneral')->nullable();
            
            /*$table->foreign('idModulo')->references('idmodulo')->on('modulo')
                  ->onDelete('no action')
                  ->onUpdate('no action');
            $table->foreign('idVideoGeneral')->references('idVideoGeneral')->on('leccion_video_general')
                  ->onDelete('no action')
                  ->onUpdate('no action');*/

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
        Schema::dropIfExists('leccion');
    }
};
