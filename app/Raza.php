<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Raza','Nombre_Raza','Descripcion_Raza'];
    protected $table='Raza';
    protected $primaryKey='Id_Raza';
}
