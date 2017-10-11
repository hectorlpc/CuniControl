<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Censo', function (Blueprint $table) {
            $table->increments('Id_Censo');
            $table->date('Fecha_Censo');
            $table->smallInteger('Total_Censo');
            $table->char('Letra_Jaula',1);
            $table->smallInteger('Numero_Jaula');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Censo');
    }
}
