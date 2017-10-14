<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadRealizadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Actividad_Realizada', function (Blueprint $table) {
            $table->string('Id_Horas');
           // $table->foreign('Id_Horas')->references('Id_Horas')->on('Horas_Alumno');
            $table->string('Id_Actividad',6);
           // $table->foreign('Id_Actividad')->references('Id_Actividad')->on('Actividad');
            $table->string('Hora_Termino');
            $table->string('Status');
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
        Schema::dropIfExists('Actividad_Realizada');
    }
}
