@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")
          <center><h2>Carreras Registradas</h2></center>
          <form>
            <div class="form-group">
              <label for="">Clave de Carrera:</label>
              <input type="" name="Nombre_Carrera" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>
            <a href="{{url('/carrera/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Id carrera:</th>
      <th>Clave carrera:</th>
      <th>Nombre carrera:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($carreras as $carrera)
      <td> {{$carrera->Id_Carrera}} </td>
      <td> {{$carrera->Clave_Carrera}} </td>
      <td> {{$carrera->Nombre_Carrera}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/carrera/' . $carrera->Id_Carrera)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Carrera" value="{{$carrera->Id_Carrera}}">
           <div align="right"> <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form><div align="right"> <a href="{{url('/carrera/' . $carrera->Id_Carrera . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
