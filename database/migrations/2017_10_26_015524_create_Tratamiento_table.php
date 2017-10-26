<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tratamiento', function (Blueprint $table) {
            $table->string('Id_Conejo_Enfermo');
            $table->foreign('Id_Conejo_Enfermo')->references('Id_Conejo_Enfermo')->on('Conejo_Enfermo');
            $table->string('Id_Medicamento',6);
            $table->foreign('Id_Medicamento')->references('Id_Medicamento')->on('Medicamento');
            $table->string('Id_Enfermedad',6);
            $table->foreign('Id_Enfermedad')->references('Id_Enfermedad')->on('Enfermedad');
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
        Schema::dropIfExists('Tratamiento');
    }
}
