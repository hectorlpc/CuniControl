<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorasAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Horas_Alumno', function (Blueprint $table) {
            $table->increments('Id_Horas');
            $table->date('Fecha');
            $table->time('Hora_Entrada');
            $table->time('HoraSalida');
            $table->integer('Id_Solicitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Horas_Alumno');
    }
}
