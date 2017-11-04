@extends('layouts.Principal')
@section('content')
<div class="container">
<h3>Usuario: {{$usuario->Nombre_Usuario}}</h3>
<hr>
<h4>Roles:</h4>
@foreach($rolesUsuario as $rol)
<p>{{$rol->Nombre_Rol}} </p>
<form action="{{url('/cuentas/'.$usuario->CURP.'/roles/'.$rol->Id_Rol)}}" method="post">
	{{method_field('delete')}}
	{{csrf_field()}}
	<button>Eliminar</button>
</form>
@endforeach
<hr>
<form action="{{url('/cuentas/'.$usuario->CURP.'/roles') }}" method="post">
<div class="form-group">
	<label>Agregar Rol:</label>
	<select class="form-control" name="Id_Rol">
		@foreach($roles as $rol)
		<option value="{{$rol->Id_Rol}}">{{$rol->Nombre_Rol}}</option>
		@endforeach
	</select>
	</div>
	{{csrf_field()}}
	<br>
	<button class="btn btn-outline-info">Enviar</button>
</form>
</div>
@endsection
