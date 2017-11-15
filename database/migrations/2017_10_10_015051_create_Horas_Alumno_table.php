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
            $table->string('Id_Horas')->primary('Id_Horas');
            $table->string('Id_Solicitud');
            $table->foreign('Id_Solicitud')->references('Id_Solicitud')->on('Solicitud_Horas');
            $table->string('Id_Actividad');
            $table->foreign('Id_Actividad')->references('Id_Actividad')->on('Actividad');
            $table->date('Fecha');
            $table->time('Hora_Entrada');
            $table->time('Hora_Salida');
            $table->enum('Status',['Aceptado','Rechazado','Pendiente'])->index();
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
        Schema::dropIfExists('Horas_Alumno');
    }
}
