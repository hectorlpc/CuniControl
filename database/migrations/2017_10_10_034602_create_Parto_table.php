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
            $table->integer('Id_Gestacion');
            $table->date('Fecha_Parto');
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
