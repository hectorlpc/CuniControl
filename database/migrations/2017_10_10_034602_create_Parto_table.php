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
            $table->date('Fecha_Monta');
            $table->string('Id_Conejo',10);
            $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
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
