<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Privilegios', function (Blueprint $table) {
            $table->string('Id_Privilegio',6)->primary('Id_Privilegio');
            $table->string('Nombre_Privilegio',50);
            $table->string('Descripcion_Privilegio',50);
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
        Schema::dropIfExists('Privilegios');
    }
}
