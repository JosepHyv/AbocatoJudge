<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta', function (Blueprint $table) {
            $table -> id();
            $table -> time('horaInicio');
            $table -> time('horaFin');
            $table -> string('url_solucion');
            $table -> double('calificacion');
            $table -> timestamps();

            // llaves foraneas 
            $table -> unsignedBigInteger('ID_Practica');
            $table -> unsignedBigInteger('ID_Usuario');
            $table -> foreign('ID_Practica') -> references('ID_Practica') -> on('practica');
            $table -> foreign('ID_Usuario') -> references('id') -> on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answare');
    }
};
