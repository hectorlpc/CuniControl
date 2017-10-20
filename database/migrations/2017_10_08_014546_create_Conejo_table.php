<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo', function (Blueprint $table) {
            $table->string('Id_Conejo',10)->primary('Id_Conejo');
            $table->string('Tatuaje_Derecho',5);
            $table->string('Tatuaje_Izquierdo',5);
            $table->string('Id_Raza');
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->enum('Genero',['Macho','Hembra']);
            $table->integer('Peso_Conejo');
            $table->enum('Status_Conejo',['Vivo','Muerto']);
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
        Schema::dropIfExists('Conejo');
    }
}
