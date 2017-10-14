<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumoAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Consumo_Alimento', function (Blueprint $table) {
            $table->string("Id_Censo")->primary('Id_Censo');
            $table->date('Fecha_Consumo');
            $table->SmallInteger('Catidad_Consumo');
            $table->string('Id_Producto');
            $table->foreign('Id_Producto')->references('Id_Producto')->on('Producto');
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
        Schema::dropIfExists('Consumo_Alimento');
    }
}
