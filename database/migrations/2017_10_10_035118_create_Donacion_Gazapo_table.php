<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionGazapoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Donacion_Gazapo', function (Blueprint $table) {
            $table->increments('Id_Donacion');
            $table->integer('Id_Parto_Donante');
            $table->integer('Id_Parto_Donatorio');
            $table->smallInteger('Cantidad_Gazapos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Donacion_Gazapo');
    }
}
