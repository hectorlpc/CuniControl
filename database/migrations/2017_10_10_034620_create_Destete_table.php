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
          $table->increments('Id_Destete');
          $table->integer('Id_Parto');
          $table->date('Fecha_Destete');
          $table->smallInteger('Numero_destetados');
          $table->float('Peso_Desteta',2,2);
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
