<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adquirido extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Id_Adquirido','Id_Conejo','Id_Adquisicion','Fecha_Adquisicion'];
    protected $table='Conejo_Adquirido';
    protected $primaryKey='Id_Adquirido';
 	
}
