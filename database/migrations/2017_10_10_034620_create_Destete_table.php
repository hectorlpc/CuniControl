<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesteteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Destete', function (Blueprint $table) {
          $table->string('Id_Destete')->primary('Id_Destete');
          $table->string('Id_Parto');
          $table->foreign('Id_Parto')->references('Id_Parto')->on('Parto');
          $table->date('Fecha_Destete');
          $table->smallInteger('Numero_destetados');
          $table->float('Peso_Destete',2,2)->nullable();
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
        Schema::dropIfExists('Destete');
    }
}
