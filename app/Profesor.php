<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    public $incrementing=false;
    public $fillable=['CURP_Profesor','Numero_unam','Seguro_social','RFC'];
    protected $table='Profesor';
    protected $primaryKey='CURP_Profesor';
}
