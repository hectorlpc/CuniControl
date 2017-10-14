<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gestacion', function (Blueprint $table) {
            $table->date('Fecha_Monta');
            $table->foreign('Fecha_Monta')->references('Fecha_Monta')->on('Monta');
            $table->string('Id_Conejo_Hembra');
            $table->foreign('Id_Conejo_Hembra')->references('Id_Conejo_Hembra')->on('Monta');
            $table->date('Fecha_Parto');
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
        Schema::dropIfExists('Gestacion');
    }
}
