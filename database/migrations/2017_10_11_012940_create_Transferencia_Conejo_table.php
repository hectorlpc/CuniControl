<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferenciaConejoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transferencia_Conejo', function (Blueprint $table) {
            //$table->increments('Id_Transferencia');
            $table->string('Id_Conejo',11);
            $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
            $table->string('Id_Area');
            $table->foreign('Id_Area')->references('Id_Area')->on('Area_Destino');
            $table->date('Fecha_Baja');
            $table->string('Creador', 18)->nullable();
            $table->foreign('Creador')->references('CURP')->on('Usuario');
            $table->string('Modificador', 18)->nullable();
            $table->foreign('Modificador')->references('CURP')->on('Usuario');            
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
        Schema::dropIfExists('Transferencia_Conejo');
    }
}
