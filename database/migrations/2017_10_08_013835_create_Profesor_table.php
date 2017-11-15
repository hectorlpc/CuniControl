<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profesor', function (Blueprint $table) {
            $table->string('CURP_Profesor',18);
            $table->foreign('CURP_Profesor')->references('CURP')->on('Usuario');
            $table->string('Numero_unam',15)->nullable();
            $table->string('Seguro_social',11)->nullable();
            $table->string('RFC',13)->nullable();
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
        Schema::dropIfExists('Profesor');
    }
}
