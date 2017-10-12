<h1>Usuario: {{$usuario->Nombre_Usuario}}</h1>
<hr>
<h2>Roles:</h2>
@foreach($rolesUsuario as $rol)
<p>{{$rol->Nombre_Rol}} </p>
<form action="{{url('/cuentas/'.$usuario->CURP.'/roles/'.$rol->Id_Rol)}}" method="post"> 
	{{method_field('delete')}}
	{{csrf_field()}}
	<button>Eliminar</button>
</form>
@endforeach
<hr>
<h2>Agregar Rol:</h2>
<form action="{{url('/cuentas/'.$usuario->CURP.'/roles') }}" method="post">
	<select name="Id_Rol">
		@foreach($roles as $rol)
		<option value="{{$rol->Id_Rol}}">{{$rol->Nombre_Rol}}</option>
		@endforeach
	</select>
	{{csrf_field()}}
	<button>Enviar</button>
</form>