<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Parto', function (Blueprint $table) {
            $table->string('Id_Parto')->primary('Id_Parto');
            $table->date('Fecha_Parto');
            $table->string('Id_Conejo_Hembra');
            $table->foreign('Id_Conejo_Hembra')->references('Id_Conejo_Hembra')->on('Monta');
            $table->date('Fecha_Monta');
            $table->foreign('Fecha_Monta')->references('Fecha_Monta')->on('Monta');
            $table->smallInteger('Numero_Vivos');
            $table->smallInteger('Numero_Muertos');
            $table->float('Peso_Nacer',2,2);
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
        Schema::dropIfExists('Parto');
    }
}
