<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Medicamento','Nombre_Medicamento','Cantidad'];
    protected $table='Medicamento';
    protected $primaryKey='Id_Medicamento';    
}
