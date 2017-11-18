<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoCementalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo_Cemental', function (Blueprint $table) {
            $table->string('Id_Conejo_Macho',11);
            $table->foreign('Id_Conejo_Macho')->references('Id_Conejo')->on('Conejo');
            $table->string('Id_Raza',5);
            $table->foreign('Id_Raza')->references('Id_Raza')->on('Raza');
            $table->date('Fecha_Activo');
            $table->date('Fecha_Ultima_Monta')->nullable();
            $table->smallInteger('Numero_Monta')->default(0);
            $table->smallInteger('Monta_Positiva')->default(0);
            $table->enum('Status',['Activo', 'Desecho','Baja'])->nullable()->index();
            $table->primary('Id_Conejo_Macho');
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
        Schema::dropIfExists('Conejo_Cemental');
    }
}
