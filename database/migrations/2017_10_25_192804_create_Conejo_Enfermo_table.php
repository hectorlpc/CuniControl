<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoEnfermoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo_Enfermo', function (Blueprint $table) {
            $table->string('Id_Conejo_Enfermo')->primary('Id_Conejo_Enfermo');
            $table->string('Id_Conejo',11);
            $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
            $table->date('Fecha_Inicio')->index();
            $table->date('Fecha_Fin')->index();
            $table->string('Creador', 18)->nullable();
            $table->foreign('Creador')->references('CURP')->on('Usuario');
            $table->string('Modificador', 18)->nullable();
            $table->foreign('Modificador')->references('CURP')->on('Usuario');            
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
        Schema::dropIfExists('Conejo_Enfermo');
    }
}
