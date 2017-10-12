<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoProduccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo_Produccion', function (Blueprint $table) {
          $table->string('Id_Conejo');
          $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');  
          $table->string('Id_Destete');
          $table->primary(['Id_Conejo','Id_Destete']);
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
        Schema::dropIfExists('Conejo_Produccion');
    }
}
