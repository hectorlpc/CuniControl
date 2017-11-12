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
          $table->string('Id_Destete',60)->primary('Id_Destete');
          $table->string('Id_Parto',50);
          $table->foreign('Id_Parto')->references('Id_Parto')->on('Parto');
          $table->date('Fecha_Destete')->index();
          $table->smallInteger('Numero_Destetados')->index();
          $table->float('Peso_Destete')->nullable();
          $table->smallInteger('Tatuados')->default(0);
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
