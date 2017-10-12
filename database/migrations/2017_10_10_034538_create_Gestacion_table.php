<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gestacion', function (Blueprint $table) {
            $table->string('Id_Gestacion')->primary('Id_Gestacion');
            $table->integer('Id_Diagnostico');
            $table->date('Fecha_Parto');
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
        Schema::dropIfExists('Gestacion');
    }
}
