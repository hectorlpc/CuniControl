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
            $table->string('Id_Monta');
            $table->foreign('Id_Monta')->references('Id_Monta')->on('Monta');
            $table->smallInteger('Numero_Vivos');
            $table->smallInteger('Numero_Muertos');
            $table->float('Peso_Nacer')->nullable();
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
