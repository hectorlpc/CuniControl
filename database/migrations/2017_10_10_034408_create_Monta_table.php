<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMontaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Monta', function (Blueprint $table) {
            $table->string('Id_Monta',40)->primary('Id_Monta');
            $table->date('Fecha_Monta')->index(); 
            $table->string('Id_Conejo_Hembra',11);
            $table->foreign('Id_Conejo_Hembra')->references('Id_Conejo')->on('Conejo');
            $table->string('Id_Conejo_Macho',11);
            $table->foreign('Id_Conejo_Macho')->references('Id_Conejo')->on('Conejo');
            $table->date('Fecha_Diagnostico')->nullable();
            $table->enum('Resultado_Diagnostico',['Positivo','Negativo'])->nullable()->index();
            $table->date('Fecha_Parto')->nullable();
            $table->boolean('Activado')->default(0);
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
        Schema::dropIfExists('Monta');
    }
}
