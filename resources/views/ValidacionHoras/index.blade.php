@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  @include('compartidas.alertas')
          <center><h2>Validación De Horas Prácticas</h2></center>
      <div style="overflow-x:auto;">  <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Alumno:</th>
      <th>Fecha:</th>
      <th>Hora De Entrada:</th>
      <th>Hora De Salida:</th>
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
          <td>{{$hora->actividad->Nombre_Actividad}}</td>

          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('validacion/' . $hora->Id_Horas)}}">
                {{method_field('patch')}}
                {{ csrf_field() }}
              <input type="hidden" name="Id_Horas" value="{{$hora->Id_Horas}}">
              <input type="hidden" name="Status" value="Aceptado">


            <div align="right">  <button type="submit" class="btn btn-secondary btn-outline-info ">Aceptar</button>
          </form>
          <form method="POST" action="{{url('validacion/' . $hora->Id_Horas)}}">
                {{method_field('patch')}}
                {{ csrf_field() }}
              <input type="hidden" name="Id_Horas" value="{{$hora->Id_Horas}}">
              <input type="hidden" name="Status" value="Rechazado">

           <div align="right">   <button type="submit" class="btn btn-secondary btn-outline-danger ">Rechazar</button>
          </form>
            </div>
          </td>
    </tr>
    @endforeach
  </tbody>
</table></div>

</div>

@endsection
