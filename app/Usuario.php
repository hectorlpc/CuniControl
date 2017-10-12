<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	public $incrementing = false;
    protected $table = 'Usuario';
    protected $primaryKey = 'CURP';
    public function roles(){
    	return $this->belongsToMany(Rol::class,'Usuario_Roles','CURP','Id_Rol');
    }
}
