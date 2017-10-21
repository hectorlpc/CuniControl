<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Id_Donacion','Id_Parto_Donante','Id_Parto_Donatorio','Cantidad_Gazapos'];
    protected $table='Donacion_Gazapo';
    protected $primaryKey='Id_Donacion';
 	
}
