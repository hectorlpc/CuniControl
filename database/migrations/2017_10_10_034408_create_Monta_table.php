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
            $table->string('Id_Monta',20);
            $table->date('Fecha_Monta'); 
            $table->string('Id_Conejo_Hembra',10);
            $table->string('Id_Conejo_Macho',10);
            $table->foreign('Id_Conejo_Hembra')->references('Id_Conejo')->on('Conejo');
            $table->foreign('Id_Conejo_Macho')->references('Id_Conejo')->on('Conejo');
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
