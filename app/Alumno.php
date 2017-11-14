<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    public $incrementing=false;
    public $fillable=['CURP_Alumno','Seguro_Axxa','Seguro_Facultativo','Numero_Cuenta'];
    protected $table='Alumno';
    protected $primaryKey='CURP_Alumno';
}
