<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoJaulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movimiento_Jaula', function (Blueprint $table) {
            $table->increments('Id_Movimineto');
            $table->string('Tatuaje_Derecho',5);
            $table->string('Tatuaje_Izquierdo',5);
            $table->char('Letra_Jaula_Anterior',1);
            $table->smallInteger('Numero_Jaula_Anterior');
            $table->char('Letra_Jaula_Nueva',1);
            $table->smallInteger('Numero_Jaula_Nueva');
            $table->string('Curp_Usuario',18);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Movimiento_Jaula');
    }
}
