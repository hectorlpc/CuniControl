@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  @include('compartidas.alertas')
          <h2>Validación De Horas Practicas</h2>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Alumno:</th>
      <th>Fecha:</th>
      <th>Hora de entrada:</th>
      <th>Hora de salida:</th>
      <th>Actividad realizada</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($horas as $hora)
          <td>{{$hora->solicitud->alumno->Nombre_Usuario . " " . $hora->solicitud->alumno->Apellido_Paterno . " " . $hora->solicitud->alumno->Apellido_Materno}}</td>
          <td>{{$hora->Fecha}}</td>
          <td>{{$hora->Hora_Entrada}}</td>
          <td>{{$hora->Hora_Salida}}</td>
          <td>{{$hora->Id_Actividad}}</td>

          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('validacion/' . $hora->Id_Horas)}}">
                {{method_field('patch')}}
                {{ csrf_field() }}
              <input type="hidden" name="Id_Horas" value="{{$hora->Id_Horas}}">
              <input type="hidden" name="Status" value="Aceptado">


            <button type="submit" class="btn btn-secondary btn-outline-info ">Aceptar</button>
          </form> 
          <form method="POST" action="{{url('validacion/' . $hora->Id_Horas)}}">
                {{method_field('patch')}}
                {{ csrf_field() }}
              <input type="hidden" name="Id_Horas" value="{{$hora->Id_Horas}}">
              <input type="hidden" name="Status" value="Rechazado">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Rechazar</button>
          </form>
            </div>
          </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection