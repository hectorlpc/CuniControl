<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario_Roles', function (Blueprint $table) {
            $table->string('CURP',18);
            $table->foreign('CURP')->references('CURP')->on('Usuario');
            $table->string('Id_Rol',6);
            $table->foreign('Id_Rol')->references('Id_Rol')->on('Roles');
            $table->primary(['CURP','Id_Rol']);
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
        Schema::dropIfExists('Usuario_Roles');
    }
}
