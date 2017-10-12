<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Producto', function (Blueprint $table) {
            $table->string('Id_Producto',6)->primary('Id_Producto');
            $table->string('Id_Proveedor',6);
            $table->foreign('Id_Proveedor')->references('Id_Proveedor')->on('Proveedor');
            $table->string('Nombre_Producto');
            $table->smallInteger('Cantidad');
            $table->string('Descripcion_Producto');
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
        Schema::dropIfExists('Producto');
    }
}
