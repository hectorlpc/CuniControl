<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Rol;


class UsuarioController extends Controller
{
    public function index() {
    	$usuarios = Usuario::all();

    	return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function show($curp) {
    	$usuario = Usuario::find($curp);
    	$roles= Rol::all();
    	$rolesUsuario= $usuario->roles()->get();
    	return view('usuarios.show', ['usuario' => $usuario,'roles'=>$roles,'rolesUsuario'=>$rolesUsuario]);
    }
    public function store_rol(Request $request,$curp){
    	$usuario = Usuario::find($curp);
    	$usuario->roles()->attach($request->Id_Rol);
    	return redirect()->back();
    }
    public function destroy_rol($curp,$idrol){
    	$usuario = Usuario::find($curp);
    	$usuario->roles()->detach($idrol);

    	return redirect()->back();
    }
}
