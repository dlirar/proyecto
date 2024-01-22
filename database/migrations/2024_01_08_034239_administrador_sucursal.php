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
        Schema::create('administrador_sucursal', function (Blueprint $table) {
            $table->id('idAdministradorSucursal');
            $table->string('Nombre', 45);
            $table->string('apellidoPaterno', 45);
            $table->string('apellidoMaterno', 45);
            $table->string('correo');
            $table->string('usuario', 45);
            $table->string('contrasena', 45);
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idSucursal')->references('idSucursal')->on('sucursal')
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
        Schema::dropIfExists('administrador_sucursal');
    }
};
