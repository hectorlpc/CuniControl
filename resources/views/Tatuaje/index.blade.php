@extends('layouts.Principal')
@section('content')

<div class="container">
          <h2>Inicio Tatuado de Conejos</h2>
          <form method="get" action="{{url('tatuaje/')}}">
          <div class="form-group">
            <label for="">Tatuaje del conejo: </label>
            <input type="" class="form-control" name="Id_Conejo" placeholder="Introduce tatuajes sin espacio">
            <br>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>            
          </div>
        </form>
        <a href="{{url('/tatuaje/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>        
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Id_Conejo</th>
      <th>Numero de tatuaje de la madre:</th>
      <th>Numero de tatuaje del padre:</th>
      <th>Raza:</th>
      <th>Genero:</th>
      <th>Fecha de nacimiento:</th>
      <th>Peso kg:</th>
      <th>Status:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr> 
      @foreach($conejos as $conejo)
      <td> {{$conejo->Id_Conejo}} </td>
      <td> {{$conejo->Tatuaje_Derecho}} </td>
      <td> {{$conejo->Tatuaje_Izquierdo}} </td>
      <td> {{$conejo->Id_Raza}} </td>
      <td> {{$conejo->Genero}} </td>
      <td> {{$conejo->Fecha_Nacimiento}} </td>
      <td> {{$conejo->Peso_Conejo}} </td>
      <td> {{$conejo->Status_Conejo}} </td>
      <td></td>
      <td><div class="btn-group btn-group-sm" role="group" aria-label="">
      <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
      </div></td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection