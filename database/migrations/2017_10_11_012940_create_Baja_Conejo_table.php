<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajaConejoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Baja_Conejo', function (Blueprint $table) {
            $table->string('Id_Baja');
            //$table->foreign('Id_Baja')->references('Id_Baja')->on('Baja');
            $table->string('Id_Conejo');
            //$table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
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
        Schema::dropIfExists('Baja_Conejo');
    }
}
