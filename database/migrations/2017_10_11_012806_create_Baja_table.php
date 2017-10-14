<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Baja', function (Blueprint $table) {
            $table->string('Id_Baja');
            $table->string('Id_Area',6);
            $table->foreign('Id_Area')->references('Id_Area')->on('Area_Destino');
            $table->string('Id_Razon',6);
            $table->foreign('Id_Razon')->references('Id_Razon')->on('Razon_Baja');
            $table->date('Fecha_Baja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Baja');
    }
}
