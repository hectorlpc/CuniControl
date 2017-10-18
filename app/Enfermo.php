<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermo extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Conejo_Enfermo','Id_Conejo','Fecha_Inicio','Fecha_Fin','Id_Tratamiento'];
    protected $table='Conejo_Tratamiento';
    protected $primaryKey=(['Id_Conejo','Id_Tratamiento']);
    //
}
