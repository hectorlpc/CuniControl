@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Áreas de Destino</h2></center>
          <form method="get" action="{{url('area/')}}">
          <div class="form-group">
            <label for="">Nombre del Área de Destino:</label>
            <input type="" class="form-control" name="Id_Area" placeholder="Buscar">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/area/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
        <div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Código:</th>
      <th>Nombre:</th>
      <th>Descripción:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($areas as $area)
          <td>{{$area->Id_Area}}</td>
          <td>{{$area->Nombre_Area}}</td>
          <td>{{$area->Descripcion_Area}}</td>

          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/area/' . $area->Id_Area)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Area" value="{{$area->Id_Area}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/area/' . $area->Id_Area . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
</div>
@endsection
