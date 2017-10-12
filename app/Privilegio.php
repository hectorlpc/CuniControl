<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Id_Privilegio','Nombre_Privilegio','Descripcion_Privilegio'];
    protected $table='Privilegios';
    protected $primaryKey='Id_Privilegio';
}
