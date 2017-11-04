@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
<table class="table table-sm table-responsive">
<thead class="thead-default">
		<tr>
			<th>CURP</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->CURP }}</td>
			<td>{{ $usuario->Nombre_Usuario}}</td>
			<td>{{ $usuario->Apellido_Paterno}}</td>
			<td>{{ $usuario->Apellido_Materno}}</td>
			<td>
				<a class="btn btn-outline-info" href="{{ url('/cuentas/' . $usuario->CURP) }}">Administrar</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection
