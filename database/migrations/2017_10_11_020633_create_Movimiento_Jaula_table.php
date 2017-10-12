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
            $table->string('Id_Movimiento');
            $table->string('Id_Conejo');
            $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
            $table->char('Id_Jaula_Anterior',3);
            $table->foreign('Id_Jaula_Anterior')->references('Id_Jaula')->on('Jaula');
            $table->char('Id_Jaula_Nueva',3);
            $table->string('Curp_Usuario',18);
            $table->foreign('Curp_Usuario')->references('CURP')->on('Usuario');
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
        Schema::dropIfExists('Movimiento_Jaula');
    }
}
