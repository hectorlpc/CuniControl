<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Raza', function (Blueprint $table) {
            $table->string('Id_Raza',5)->primary('Id_Raza');
            $table->string('Nombre_Raza',20);
            $table->string('Descripcion_Raza',75);
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
        Schema::dropIfExists('Raza');
    }
}
