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
            $table->string('Id_Conejo',10);
            $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->string('Id_Enfermedad');
            $table->foreign('Id_Enfermedad')->references('Id_Enfermedad')->on('Enfermedad');
            $table->string('Id_Medicamento');
            $table->foreign('Id_Medicamento')->references('Id_Medicamento')->on('Medicamento');            
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
