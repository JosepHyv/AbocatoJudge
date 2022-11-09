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
        Schema::create('institucion_educativa', function (Blueprint $table) {
            $table->id("ID_Institucion");
            $table -> string("nombre");
            $table -> string("estado");
            $table -> integer("numeroTotalEstudiantes") -> index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educative_institution');
    }
};
