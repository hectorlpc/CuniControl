<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaula extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Jaula'];
    protected $table='Jaula';
    protected $primaryKey='Id_Jaula';    
}
