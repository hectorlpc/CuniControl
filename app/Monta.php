<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monta extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Fecha_Monta','Id_Conejo_Hembra','Id_Conejo_Macho'];
    protected $table='Monta';
    protected $primaryKey=['Fecha_Monta', 'Id_Conejo_Hembra'];
}
