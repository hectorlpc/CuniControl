<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaDestinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Area_Destino', function (Blueprint $table) {
            $table->string('Id_Area')->primary('Id_Area');
            $table->string('Nombre_Area',50);
            $table->string('Descripcion_Area',100);
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
        Schema::dropIfExists('Area_Destino');
    }
}
