<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejaProductoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Coneja_Productora', function (Blueprint $table) {
            $table->string('Id_Conejo_Hembra',11);
            $table->foreign('Id_Conejo_Hembra')->references('Id_Conejo')->on('Conejo');
            $table->string('Id_Raza',2);
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->string('Numero_Conejo',2);
            $table->date('Fecha_Activo');
            $table->date('Fecha_Ultima_Monta')->nullable();
            $table->smallInteger('Numero_Monta')->default(0);
            $table->smallInteger('Monta_Positiva')->default(0);
            $table->enum('Status',['Activo', 'Inactivo'])->nullable()->index();
            $table->primary('Id_Conejo_Hembra');
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
        Schema::dropIfExists('Coneja_Productora');    
    }
}
