@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Baja por transferencias</h2></center>
  <form method="get" action="{{url('/transferencia')}}">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Tatuajes del conejo:</label>
        <input class="form-control" name="Id_Conejo">
        <br>
    <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
    <a href="{{url('/transferencia/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
    </div>
  </form>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Tatuajes del conejo:</th>
      <th>Fecha de baja:</th>
      <th>Motivo de baja:</th>
      <th>Descripcion de baja:</th>
      <th>Registró:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($transferencias as $transferencia)
      <td> {{substr($transferencia->Id_Conejo,0,5) . ' - ' . substr($transferencia->Id_Conejo,5,11) }} </td>
      <td> {{$transferencia->Fecha_Baja}} </td>
      <td> {{$transferencia->area->Nombre_Area}} </td>
      <td> {{$transferencia->area->Descripcion_Area}} </td>
      <td> {{$transferencia->Creador}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
        {{-- <form method="POST" action="{{url('/transferencia/' . $transferencia->Id_Conejo)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo" value="{{$transferencia->Id_Conejo}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
        </form> 
        <a href="{{url('/transferencia/' . $transferencia->Id_Conejo . '/edit')}}" class="btn btn-secondary btn-outline-info">Dar de baja</a> --}}
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
@endsection