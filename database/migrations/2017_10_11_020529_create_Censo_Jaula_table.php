<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensoJaulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Censo_Jaula', function (Blueprint $table) {
            $table->string('Id_Censo')->primary('Id_Censo');
            $table->date('Fecha_Censo');
            $table->smallInteger('Total_Censo');
            $table->string('Id_Jaula');
            $table->foreign('Id_Jaula')->references('Id_Jaula')->on('Jaula');
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
        Schema::dropIfExists('Censo_Jaula');
    }
}
