<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productora extends Model
{
    public $incrementing=true;
    public $fillable=['Id_Productora','Id_Raza','Id_Conejo','Numero_Conejo','Status'];
    protected $table='Coneja_Productora';
    protected $primaryKey='Id_Productora';		
}
