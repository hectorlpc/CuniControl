<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Solicitud_Horas', function (Blueprint $table) {
            $table->string('Id_Solicitud')->primary('Id_Solicitud');
            $table->string('CURP_Alumno');
            $table->foreign('CURP_Alumno')->references('CURP_Alumno')->on('Alumno');
            $table->string('CURP_Profesor');
            $table->foreign('CURP_Profesor')->references('CURP_Profesor')->on('Profesor');
            $table->date('Fecha_Solicitud');
            $table->string('Horas_Totales');
            $table->string('Id_Materia');
            $table->foreign('Id_Materia')->references('Id_Materia')->on('Materia');
            $table->string('Id_Grupo');
            $table->foreign('Id_Grupo')->references('Id_Grupo')->on('Grupo');
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
        Schema::dropIfExists('Solicitud_Horas');
    }
}
