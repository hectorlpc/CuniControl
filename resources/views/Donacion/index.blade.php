@extends('layouts.Principal')
@section('content')
<div class="container">
          <h2>DONACIÓN DE GAZAPOS:</h2>
          <form method="get" action="{{url('/donacion/')}}">
          <div class="form-group">
            <label for="">Numero de la donación:</label>
            <input type="" class="form-control" name="Id_Parto_Donante" placeholder="Introduce tatuajes sin espacio">
            <br>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
          </div>
        </form>
        <a href="{{url('donacion/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>

        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Id Donacion</th>
      <th>Parto donante:</th>
      <th>Parto receptor:</th>
      <th>No. de gazapos donados:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($donaciones as $donacion)
      <td> {{$donacion->Id_Donacion}} </td>
      <td> {{$donacion->Id_Parto_Donante}} </td>
      <td> {{$donacion->Id_Parto_Donatorio}} </td>
      <td> {{$donacion->Cantidad_Gazapos}} </td>
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