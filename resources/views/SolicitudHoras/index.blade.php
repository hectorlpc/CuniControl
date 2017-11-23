@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  @include("compartidas.alertas")
          <center><h2>Resumen De Solicitud De Horas Prácticas:</h2></center>
          <br>
          <div align="right"><a href="{{url('/solicitudHoras/create')}}" type="submit" class="btn btn-outline-success">Solicitar horas</a>
          <br>
        <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Código:</th>
      <th>Asignatura:</th>
      <th>Grupo:</th>
      <th>Fecha de la solicitud:</th>
      <th>Cantidad de horas practicas:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($solicitudes as $solicitud)
      <td>{{$solicitud->Id_Solicitud}}</td>
      <td> {{$solicitud->Id_Materia}} </td>
      <td> {{substr( $solicitud->Id_Grupo ,0,4)}} </td>
      <td> {{$solicitud->Fecha_Solicitud}} </td>
      <td> {{$solicitud->Horas_Totales}} </td>
      <td><div class="btn-group btn-group-sm" role="group" aria-label="">

          <form method="POST" action="{{url('/SolicitudHoras/' . $solicitud->Id_Solicitud)}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="hidden" name="Id_Solicitud" value="{{$solicitud->Id_Solicitud}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Cancelar Solicitud</button>
           </form>
      </div></td>
    </tr>
    @endforeach
  </tbody>
</table></div>

</div>

@endsection
