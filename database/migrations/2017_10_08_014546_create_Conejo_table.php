<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo', function (Blueprint $table) {
            $table->string('Id_Conejo',11)->primary('Id_Conejo');
            $table->string('Tatuaje_Derecho',5);
            $table->string('Tatuaje_Izquierdo',6);
            $table->date('Fecha_Nacimiento')->index();
            $table->date('Fecha_Muerte')->nullable()->index();
            $table->string('Id_Raza',5);
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->enum('Genero',['Macho','Hembra'])->index();
            $table->enum('Status',['Vivo','Muerto','Transferido'])->index();
            $table->string('Id_Jaula',3)->nullable();
            $table->foreign('Id_Jaula')->references('Id_Jaula')->on('Jaula');
            $table->string('Creador', 18)->nullable();
            $table->foreign('Creador')->references('CURP')->on('Usuario');
            $table->string('Modificador', 18)->nullable();
            $table->foreign('Modificador')->references('CURP')->on('Usuario');            
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
        Schema::dropIfExists('Conejo');
    }
}
