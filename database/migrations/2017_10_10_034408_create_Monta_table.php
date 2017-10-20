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
            $table->date('Fecha_Monta'); 
            $table->string('Id_Conejo_Hembra',10);
            $table->foreign('Id_Conejo_Hembra')->references('Id_Conejo')->on('Conejo');
            $table->string('Id_Conejo_Macho',10);
            $table->foreign('Id_Conejo_Macho')->references('Id_Conejo')->on('Conejo');
            $table->date('Fecha_Diagnostico')->nullable();
            $table->string('Resultado_Diagnostico',200)->nullable();
            $table->primary(['Fecha_Monta','Id_Conejo_Hembra']);
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
