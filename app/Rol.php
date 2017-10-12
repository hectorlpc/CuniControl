<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Rol','Nombre_Rol','Descripcion_Rol'];
    protected $table='Roles';
    protected $primaryKey='Id_Rol';
}
