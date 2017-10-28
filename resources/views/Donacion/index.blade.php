@extends('layouts.Principal')
@section('content')
<div class="container">
          <h2>DONACIÓN DE GAZAPOS:</h2>
          <form method="get" action="{{url('/donacion/')}}">
          <div class="form-group">
            <label for="">Numero de la donación:</label>
            <input type="" class="form-control" name="Id_Donacion" placeholder="Introduce tatuajes sin espacio">
            <br>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('donacion/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>

        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Coneja donante:</th>
      <th>Coneja receptora</th>      
      <th>No. de gazapos donados:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($donaciones as $donacion)
      <td> {{$donacion->parto->monta->Id_Conejo_Hembra}} </td>
      <td> {{$donacion->parto->monta->Id_Conejo_Hembra}} </td>
      <td> {{$donacion->Cantidad_Gazapos}} </td>
      <td></td>
      <td><div class="btn-group btn-group-sm" role="group" aria-label="">
      <form method="POST" action="{{url('/donacion/' . $donacion->Id_Donacion)}}">
        {{csrf_field()}}
        {{method_field('delete')}}
        <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
      </form> <a href="{{url('/donacion/' . $donacion->Id_Donacion . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
      </div></td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection