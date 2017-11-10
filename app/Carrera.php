<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Carrera','Clave_Carrera','Nombre_Carrera'];
    protected $table='Carrera';
    protected $primaryKey='Id_Carrera';    
}
