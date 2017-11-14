<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Donacion','Id_Parto_Donante','Id_Parto_Donatorio','Cantidad_Gazapos', 'Fecha','Creador','Modificador'];
    protected $table='Donacion_Gazapo';
    protected $primaryKey='Id_Donacion'; 

    public function parto()
    {
    	return $this->belongsTo(Parto::class,'Id_Parto_Donante','Id_Parto');
    }	
}
