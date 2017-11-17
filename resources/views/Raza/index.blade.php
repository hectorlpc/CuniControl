@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  @include("compartidas.alertas")
          <center><h2>Razas</h2></center>
          <form method="get" action="{{url('raza/')}}">
          <div class="form-group">
            <label for="">Nombre de la raza:</label>
            <input type="" class="form-control" name="Id_Raza" placeholder="Buscar">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/raza/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
        <div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Código:</th>
      <th>Nombre:</th>
      <th>Descripcion:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($razas as $raza)
          <td>{{$raza->Id_Raza}}</td>
          <td>{{$raza->Nombre_Raza}}</td>
          <td>{{$raza->Descripcion_Raza}}</td>

          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/raza/' . $raza->Id_Raza)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Raza" value="{{$raza->Id_Raza}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/raza/' . $raza->Id_Raza . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
</div>
@endsection
