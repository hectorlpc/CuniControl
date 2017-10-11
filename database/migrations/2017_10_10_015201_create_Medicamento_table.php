<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Medicamento', function (Blueprint $table) {
          $table->string('Id_Medicamento',6)->primary('Id_Medicamento');
          $table->string('Nombre_Medicamento',50);
          $table->string('Descripcion_Medicamento',75);
          $table->integer('Cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Medicamento');
    }
}
