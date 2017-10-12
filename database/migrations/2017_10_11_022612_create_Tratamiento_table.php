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
            $table->string('Id_Tratamiento',6)->primary('Id_Tratamiento');
            $table->string('Id_Enfermedad',6);
            $table->string('Id_Medicamento',6);
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
        Schema::dropIfExists('Tratamiento');
    }
}
