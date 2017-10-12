<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermedadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enfermedad', function (Blueprint $table) {
          $table->string('Id_Enfermedad',6)->primary('Id_Enfermedad');
          $table->string('Nombre_Razon',50);
          $table->string('Descripcion_Baja',75);
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
        Schema::dropIfExists('Enfermedad');
    }
}
