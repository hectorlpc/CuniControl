<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo_Tratamiento', function (Blueprint $table) {
            $table->increments('Id_Conejo_Enfermo');
            $table->string('Tatuaje_Derecho',5);
            $table->string('Tatuaje_Izquierdo',5);
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->string('Id_Tratamiento',6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Conejo_Tratamiento');
    }
}
