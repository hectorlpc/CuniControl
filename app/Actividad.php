<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Actividad','Nombre_Actividad','Descripcion_Actividad'];
    protected $table='Actividad';
    protected $primaryKey='Id_Actividad';    
}
