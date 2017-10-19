<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
     public $incrementing=false;
    public $fillable=['Id_Enfermedad','Nombre_Enfermedad','Descripcion_Enfermedad'];
    protected $table='Enfermedad';
    protected $primaryKey='Id_Enfermedad';
}
