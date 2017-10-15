<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
	use Notifiable;

	public $incrementing = false;
    protected $table = 'Usuario';
    protected $primaryKey = 'CURP';
    protected $fillable = [
  		'CURP', 'Nombre_Usuario', 'Apellido_Paterno', 'Apellido_Materno',
    	'Correo', 'Genero', 'Fecha_Nacimiento', 'Telefono', 'Celular', 'password',
  	];
  protected $hidden = [
 		'password', 'remember_token',
	];
	
    public function roles(){
    	return $this->belongsToMany(Rol::class,'Usuario_Roles','CURP','Id_Rol');
    }
}
