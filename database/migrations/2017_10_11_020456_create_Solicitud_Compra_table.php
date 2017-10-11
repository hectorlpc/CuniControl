<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Solicitud_Compra', function (Blueprint $table) {
            $table->increments('Id_Solicitud');
            $table->string('Id_Producto',6);
            $table->smallInteger('Cantidad_Solicitada');
            $table->string('Encargado_Solicitud',18);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Solicitud_Compra');
    }
}
