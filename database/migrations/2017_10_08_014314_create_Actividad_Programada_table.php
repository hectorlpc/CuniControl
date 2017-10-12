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
            $table->string('Id_Actividad_P');
            $table->date('Fecha_Actividad');
            $table->string('CURP_Encargado',18);
            $table->string('Id_Actividad',6);
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
