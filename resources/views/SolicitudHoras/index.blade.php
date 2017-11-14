@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  @include("compartidas.alertas")
          <center><h2>Resumen De Solicitud De Horas Practicas:</h2></center>
          <br>
          <br>
          <a href="{{url('/solicitudHoras/create')}}" type="submit" class="btn btn-outline-success">Solicitar horas</a>
          <form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Asignatura:</th>
      <th>Grupo:</th>
      <th>Carrera:</th>
      <th>Fecha de la solicitud:</th>
      <th>Cantidad de horas practicas:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Laboratorio de conejos</td>
      <td>1703</td>
      <td>Veterinaria</td>
      <td>17/10/2017</td>
      <td>200</td>
      <td><div class="btn-group btn-group-sm" role="group" aria-label="">
      <button type="button" class="btn btn-secondary btn-outline-danger ">Cancelar Solicitud</button>
      </div></td>
    </tr>

  </tbody>
</table>

</div>

@endsection
