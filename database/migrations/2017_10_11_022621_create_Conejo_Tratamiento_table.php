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
            $table->string('Id_Conejo',10);
            $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->string('Id_Tratamiento',6);
            $table->primary(['Id_Conejo','Id_Tratamiento']);
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
        Schema::dropIfExists('Conejo_Tratamiento');
    }
}
