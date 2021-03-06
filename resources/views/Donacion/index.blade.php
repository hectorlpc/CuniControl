@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")
          <center><h2>Donacion de Gazapos</h2></center>
          <form method="get" action="{{url('/donacion/')}}">
          <div class="form-group">
            <label for="">Numero de la donación:</label>
            <input type="" class="form-control" name="Id_Conejo_Hembra" placeholder="Introduce tatuajes sin espacio">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('donacion/create')}}" type="submit" class="btn btn-outline-success">Agregar</a></div>
          </div>
        </form>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha:</th>
      <th>Donante:</th>
      <th>Receptora</th>
      <th>Donados:</th>
      <th>Registró</th>
      <th>Actualizó</th>
      <th>Notas</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($donaciones as $donacion)
      <td> {{$donacion->Fecha}} </td>
      <td> {{substr($donacion->Id_Parto_Donante, 0, 5) . ' - ' . substr($donacion->Id_Parto_Donante, 5, 5)}} </td>
      <td> {{substr($donacion->Id_Parto_Donatorio, 0, 5) . ' - ' . substr($donacion->Id_Parto_Donatorio, 5, 5)}} </td>
      <td> {{$donacion->Donados}} </td>
      <td> {{$donacion->Creador}} </td>
      <td> {{$donacion->Modificador}} </td>
      <td> {{$donacion->Notas}} </td>
      <td></td>
      <td><div class="btn-group btn-group-sm" role="group" aria-label="">
      {{-- <form method="POST" action="{{url('/donacion/' . $donacion->Id_Donacion)}}">
        {{csrf_field()}}
        {{method_field('delete')}}
        <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
      </form> --}}
      <a href="{{url('/donacion/' . $donacion->Id_Donacion . '/edit')}}" class="btn btn-secondary btn-outline-info">Actualizar</a>
      </div></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
