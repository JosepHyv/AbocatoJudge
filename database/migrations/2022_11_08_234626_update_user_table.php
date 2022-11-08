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
        //
        Schema::table('users', function(Blueprint $table)
        {
            // llaves foraneas
            $table -> unsignedBigInteger('ID_Institucion');
            $table -> unsignedBigInteger('ID_Rol');

            $table -> foreign('ID_Institucion') -> references('ID_Institucion') -> on('institucion_educativa');
            $table -> foreign('ID_Rol') -> references('ID_Rol') -> on('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
