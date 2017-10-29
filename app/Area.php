<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Area','Nombre_Area','Descripcion_Area'];
    protected $table='Area_Destino';
    protected $primaryKey='Id_Area';
}
