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
        Schema::create('practica', function (Blueprint $table) {
            $table->id('ID_Practica');
            $table->timestamps();
            $table -> string('nombrePractica');
            $table -> string('gradoComplejidad');
            $table -> string('enfoque');
            $table -> date('fechaRegistro');
            $table -> string('tiempoLimite');
            $table -> text('descripcionPractica');
            $table -> string('objetivo');
            $table -> string('lenguajeDeProgramacion');


            //llavez foraneas
            $table -> unsignedBigInteger('ID_Usuario') -> nullable();
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
        Schema::dropIfExists('practice');
    }
};
