<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMontaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Monta', function (Blueprint $table) {
            $table->string('Id_Monta');
            $table->string('Tatuaje_Derecho_Macho',6);
            $table->string('Tatuaje_Izquierdo_Macho',6);
            $table->string('Tatuaje_Derecho_Hembra',6);
            $table->string('Tatuaje_Izquierdo_Hembra',6);
            $table->date('Fecha_Monta');
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
        Schema::dropIfExists('Monta');
    }
}
