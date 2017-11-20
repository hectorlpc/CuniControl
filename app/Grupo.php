<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Grupo', 'Clave_Grupo'];
    protected $table='Grupo';
    protected $primaryKey='Id_Grupo';        
}
