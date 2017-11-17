<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MyResetPassword;

class Usuario extends Authenticatable
{
	use Notifiable;

	public $incrementing = false;
    protected $table = 'Usuario';
    protected $primaryKey = 'CURP';
    protected $fillable = [
  		'CURP', 'Nombre_Usuario', 'Apellido_Paterno', 'Apellido_Materno',
    	'email', 'Genero', 'Fecha_Nacimiento', 'Telefono', 'Celular', 'password','confirmacion_code',
  	];
  protected $hidden = [
 		'password', 'remember_token',
	];

    public function roles(){
    	return $this->belongsToMany(Rol::class,'Usuario_Roles','CURP','Id_Rol');
    }
    public function tieneRol($id_rol){
      return $this->roles->pluck("Id_Rol")->contains($id_rol);
    }
    public function tienePerfil($perfil){
      switch($perfil){
        case "Profesor":
          return $this->profesor;
      
        case "Alumno":
          return $this->alumno;
      }
    }
    public function profesor(){
      return $this->hasOne(Profesor::class,'CURP_Profesor','CURP');
    }

    public function alumno(){
      return $this->hasOne(Alumno::class,'CURP_Alumno','CURP');
    }

		public function sendPasswordResetNotification($token)
{
    $this->notify(new MyResetPassword($token));
}
}
