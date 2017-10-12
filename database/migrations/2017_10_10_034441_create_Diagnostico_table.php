<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Diagnostico', function (Blueprint $table) {
            $table->string('Id_Diagnostico')->primary('Id_Diagnostico');
            $table->integer('Id_Monta');
            $table->date('Fecha_Disagnostico');
            $table->boolean('Resultado_Disagnostico');
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
        Schema::dropIfExists('Diagnostico');
    }
}
