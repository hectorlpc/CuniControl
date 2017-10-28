<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adquisicion extends Model
{
    //

    public $incrementing=false;
    public $fillable=['Id_Adquisicion','Nombre_Adquisicion','Descripcion_Adquisicion'];
    protected $table='Tipo_Adquisicion';
    protected $primaryKey='Id_Adquisicion';
}
