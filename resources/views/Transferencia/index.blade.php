@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Baja por transferencias</h2></center>
  <form method="get" action="{{url('/transferencia')}}">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Número de tatuaje del conejo:</label>
        <input class="form-control" name="Id_Conejo">
        <br>
    <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
    <a href="{{url('/transferencia/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
    </div>
  </form>
        <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Tatuaje Conejo:</th>
      <th>Fecha de baja:</th>
      <th>Motivo de baja:</th>
      <th>Descripcion de baja:</th>
      <th>Registró</th>
      <th>Actualizó</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($transferencias as $transferencia)
      <td> {{$transferencia->Id_Conejo}} </td>
      <td> {{$transferencia->Fecha_Baja}} </td>
      <td> {{$transferencia->area->Nombre_Area}} </td>
      <td> {{$transferencia->area->Descripcion_Area}} </td>
      <td> {{$transferencia->Creador}} </td>
      <td> {{$transferencia->Modificador}} </td>
      <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="">
        <form method="POST" action="{{url('/transferencia/' . $transferencia->Id_Transferencia)}}">
        {{csrf_field()}}
        {{method_field('delete')}}
        <input type="hidden" name="Id_Transferencia" value="{{$transferencia->Id_Transferencia}}">
        <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
        </form> <a href="{{url('/transferencia/' . $transferencia->Id_Transferencia . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
    </td>
      @endforeach
    </tr>
  </tbody>
</table></div>

</div>

@endsection
