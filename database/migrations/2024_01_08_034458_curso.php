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
        Schema::create('curso', function (Blueprint $table) {
            $table->id('idCurso');
            $table->string('nombreCurso', 100);
            $table->text('descripcion');
            $table->string('imagenCursoRuta');
            $table->boolean('disponible')->default(true);
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
        Schema::dropIfExists('curso');
    }
};
