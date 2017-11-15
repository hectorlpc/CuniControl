<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionGazapoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Donacion_Gazapo', function (Blueprint $table) {
            $table->string('Id_Donacion', 80)->primary('Id_Donacion');
            $table->string('Id_Parto_Donante',50);
            $table->foreign('Id_Parto_Donante')->references('Id_Parto')->on('Parto');
            $table->string('Id_Parto_Donatorio', 50);
            $table->foreign('Id_Parto_Donatorio')->references('Id_Parto')->on('Parto');
            $table->smallInteger('Donados');
            $table->date('Fecha');
            $table->string('Creador', 18)->nullable();
            $table->foreign('Creador')->references('CURP')->on('Usuario');
            $table->string('Modificador', 18)->nullable();
            $table->foreign('Modificador')->references('CURP')->on('Usuario');
            $table->longText('Notas')->nullable();
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
        Schema::dropIfExists('Donacion_Gazapo');
    }
}
