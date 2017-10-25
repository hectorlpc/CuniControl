<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejaProductoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Coneja_Productora', function (Blueprint $table) {
            $table->increments('Id_Productora');
            $table->string('Id_Raza',10);
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->string('Id_Conejo');
            $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
            $table->string('Numero_Conejo');
            $table->boolean('Status')->nullable();
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
        Schema::dropIfExists('Coneja_Productora');    
    }
}
