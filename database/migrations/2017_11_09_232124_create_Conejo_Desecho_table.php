<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoDesechoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo_Desecho', function (Blueprint $table) {
            $table->increments('Id_Desecho');
            $table->string('Id_Raza',10);
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->string('Id_Conejo_Desecho');
            $table->foreign('Id_Conejo_Desecho')->references('Id_Conejo')->on('Conejo');
            $table->boolean('Status')->nullable();
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
        Schema::dropIfExists('Conejo_Desecho');
    }
}
