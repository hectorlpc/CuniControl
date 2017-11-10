<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoCementalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo_Cemental', function (Blueprint $table) {
            $table->increments('Id_Cemental');
            $table->string('Id_Raza',11);
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->string('Id_Conejo_Macho');
            $table->foreign('Id_Conejo_Macho')->references('Id_Conejo')->on('Conejo');
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
        Schema::dropIfExists('Conejo_Cemental');
    }
}
