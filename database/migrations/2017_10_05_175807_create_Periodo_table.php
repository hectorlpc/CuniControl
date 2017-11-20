<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Periodo', function (Blueprint $table) {
            $table->string('Id_Periodo',6)->primary('Id_Periodo');
            $table->date('Fecha_Inicio')->index();
            $table->date('Fecha_Termino')->index(); 
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
        Schema::dropIfExists('Periodo');
    }
}
