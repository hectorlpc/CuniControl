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
            $table->string('Id_Parto',50)->primary('Id_Parto');
            $table->date('Fecha_Parto')->index();
            $table->string('Id_Monta',40);
            $table->foreign('Id_Monta')->references('Id_Monta')->on('Monta');
            $table->smallInteger('Numero_Vivos')->index();
            $table->smallInteger('Numero_Muertos')->index();
            $table->float('Peso_Nacer')->nullable();
            $table->boolean('Activado')->default(0);
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
        Schema::dropIfExists('Parto');
    }
}
