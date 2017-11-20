<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Periodo', 'Fecha_Inicio', 'Fecha_Termino'];
    protected $table='Periodo';
    protected $primaryKey='Id_Periodo';        
}
