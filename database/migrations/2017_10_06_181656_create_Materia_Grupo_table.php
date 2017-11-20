<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Materia_Grupo', function (Blueprint $table) {
            $table->string('Id_Grupo',19);
            $table->foreign('Id_Grupo')->references('Id_Grupo')->on('Grupo');
            $table->string('Id_Materia',14);
            $table->foreign('Id_Materia')->references('Id_Materia')->on('Materia');
            $table->primary(['Id_Materia','Id_Grupo']);
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
        Schema::dropIfExists('Materia_Grupo');
    }
}
