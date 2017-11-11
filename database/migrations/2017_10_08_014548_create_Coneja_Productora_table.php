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
            $table->string('Id_Raza',2);
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->string('Id_Conejo_Hembra',11);
            $table->foreign('Id_Conejo_Hembra')->references('Id_Conejo')->on('Conejo');
            $table->string('Numero_Conejo',2);
            //$table->boolean('Status')->nullable();
            //$table->date('Fecha');
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
