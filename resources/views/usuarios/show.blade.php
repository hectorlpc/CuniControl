@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
	@include('compartidas.alertas')
<h3>Usuario: {{$usuario->Nombre_Usuario}}</h3>
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
	<button class="btn btn-outline-info">Asignar Rol</button>
</form>

<h4>Roles:</h4>
<table class="table table-sm table-responsive">
  <thead class="thead-default">
  	<tr>
  		<th>Rol</th>
  		<th></th>
  	</tr>
  </thead>
  <tbody>
@foreach($rolesUsuario as $rol)
<tr>
<td>{{$rol->Nombre_Rol}} </td>
<td><form action="{{url('/cuentas/'.$usuario->CURP.'/roles/'.$rol->Id_Rol)}}" method="post">
	{{method_field('delete')}}
	{{csrf_field()}}
	<button class="btn btn-outline-danger">Eliminar</button>
</form></td>
</tr>
@endforeach
</tbody>
</table>
</div>
<hr>
@endsection
