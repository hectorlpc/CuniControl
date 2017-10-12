<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoAdquiridoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo_Adquirido', function (Blueprint $table) {
            $table->string('Id_Conejo',10);
            $table->foreign('Id_Conejo')->references('Id_Conejo')->on('Conejo');
            $table->string('Id_Adquisicion',6);
            $table->date('Fecha_Adquisicion');
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
        Schema::dropIfExists('Conejo_Adquirido');
    }
}
