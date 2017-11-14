<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alumno', function (Blueprint $table) {
            $table->string('CURP_Alumno',18)->primary('CURP_Alumno');
            $table->foreign('CURP_Alumno',18)->references('CURP')->on('Usuario');
            $table->string('Seguro_Axxa',10)->nullable();
            $table->string('Seguro_Facultativo',11)->nullable();
            $table->string('Numero_Cuenta',10)->nullable();
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
        Schema::dropIfExists('Alumno');
    }
}
