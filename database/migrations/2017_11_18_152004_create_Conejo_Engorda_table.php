<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoEngordaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo_Engorda', function (Blueprint $table) {
            $table->string('Id_Conejo_Engorda',11);
            $table->foreign('Id_Conejo_Engorda')->references('Id_Conejo')->on('Conejo');
            $table->string('Id_Raza',5);
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->date('Fecha_Alta');
            $table->enum('Status',['Activo','Baja'])->index();
            $table->string('Creador', 18)->nullable();
            $table->foreign('Creador')->references('CURP')->on('Usuario');
            $table->string('Modificador', 18)->nullable();
            $table->foreign('Modificador')->references('CURP')->on('Usuario');
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
        Schema::dropIfExists('Conejo_Engorda');
    }
}
