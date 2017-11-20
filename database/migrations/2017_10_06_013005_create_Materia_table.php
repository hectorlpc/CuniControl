<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Materia', function (Blueprint $table) {
            $table->string('Id_Materia',14)->primary('Id_Materia');
            $table->string('Nombre_Materia',50);
            $table->string('Id_Carrera',6);
            $table->foreign('Id_Carrera')->references('Id_Carrera')->on('Carrera');
            $table->string('Id_Periodo',6);
            $table->foreign('Id_Periodo')->references('Id_Periodo')->on('Periodo');
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
        Schema::dropIfExists('Materia');
    }
}
