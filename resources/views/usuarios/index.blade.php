@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
<div style="overflow-x:auto;"><table class="table table-sm table-responsive">
<thead class="thead-default">
	<center><h3>Usuarios</h3></center><br><br>
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
				<div align="right"><a class="btn btn-outline-info" href="{{ url('/cuentas/' . $usuario->CURP) }}">Administrar</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table></div>
</div>
@endsection
