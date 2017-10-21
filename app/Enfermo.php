<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermo extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Conejo_Enfermo','Id_Conejo','Fecha_Inicio','Fecha_Fin','Id_Enfermedad', 'Id_Medicamento'];
    protected $table='Conejo_Enfermo';
    protected $primaryKey='Id_Conejo_Enfermo';
    //
}
