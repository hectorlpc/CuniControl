<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadProgramadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Actividad_Programada', function (Blueprint $table) {
            $table->string('Id_Actividad_Programada')->primary('Actividad_Programada');
            $table->string('Id_Actividad',6);
            $table->foreign('Id_Actividad')->references('Id_Actividad')->on('Actividad');
            $table->date('Fecha_Actividad');
            $table->string('CURP_Encargado',18);
            $table->foreign('CURP_Encargado')->references('CURP_Profesor')->on('Profesor');
            $table->string('Nota');
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
        Schema::dropIfExists('Actividad_Programada');
    }
}
