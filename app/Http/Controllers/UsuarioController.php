<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index() {
    	$usuarios = Usuario::all();

    	return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function show($curp) {
    	$usuario = Usuario::find($curp);

    	return view('usuarios.show', ['usuario' => $usuario]);
    }
}
