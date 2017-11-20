@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")
      @if(is_null($periodo))
          <center><h2>No hay periodo activo, contacta al encargado del módulo para poder de dar de alta tus materias</h2>
            <a href="{{url('/home')}}" class="btn btn-outline-primary">Volver a inicio </a> </li>
    @else
          <center><h2>Materias Registradas</h2></center>
          <form>
            <div class="form-group">
              <label for="">Nombre de la Materia:</label>
              <input type="" name="Nombre_Materia" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>
            <a href="{{url('/materia/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Materia:</th>
      <th>Carrera:</th>
      <th>Periodo:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($materias as $materia)
      <td> {{$materia->Nombre_Materia}} </td>
      <td> {{$materia->carrera->Nombre_Carrera}} </td>
      <td> {{$materia->Id_Periodo}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/materia/' . $materia->Id_Materia)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Materia" value="{{$materia->Id_Materia}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endif
@endsection
