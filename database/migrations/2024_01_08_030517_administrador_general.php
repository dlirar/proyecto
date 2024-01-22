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
        Schema::create('administrador_general', function (Blueprint $table) {
            $table->id('idAdministradorGeneral');
            $table->string('Nombre', 45);
            $table->string('apellidoPaterno', 45);
            $table->string('apellidoMaterno', 45);
            $table->string('correo');
            $table->string('usuario', 45);
            $table->string('contrasena', 45);

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
        Schema::dropIfExists('administrador_general');
    }
};
