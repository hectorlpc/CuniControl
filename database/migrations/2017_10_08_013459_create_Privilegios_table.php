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
            $table->string('Id_Rol');
            $table->foreign('Id_Rol')->references('Id_Rol')->on('Roles');
            $table->string('Nombre_Privilegio',100);
            $table->string('Descripcion_Privilegio',200);
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
