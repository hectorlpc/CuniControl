<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Curso_Alumno', function (Blueprint $table) {
            $table->string('CURP_Alumno',18);
            $table->foreign('CURP_Alumno')->references('CURP_Alumno')->on('Alumno');
            $table->string('Id_Curso');
            //$table->foreign('Id_Curso')->references('Id_Curso')->on('Curso');
            $table->string('Horas_Alumno');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
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
        Schema::dropIfExists('Curso_Alumno');
    }
}
