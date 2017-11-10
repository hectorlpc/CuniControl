@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <h2>Inicio Tatuado de Conejos</h2>
          <form method="get" action="{{url('tatuaje/')}}">
          <div class="form-group">
            <label for="">Tatuaje del conejo: </label>
            <input type="" class="form-control" name="Id_Conejo" placeholder="Introduce tatuajes sin espacio">
            <br>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/tatuaje/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha Nacimiento:</th>
      <th>Tatuaje Derecho:</th>
      <th>Tatuaje Izquierdo:</th>
      <th>Raza:</th>
      <th>Genero:</th>
      <th>Status:</th>
      <th>Engorda:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($conejos as $conejo)
    @if($conejo->Status == 'Vivo')
      <td> {{$conejo->Fecha_Nacimiento}} </td>
      <td> {{$conejo->Tatuaje_Derecho}} </td>
      <td> {{$conejo->Tatuaje_Izquierdo}} </td>
      <td> {{$conejo->raza->Nombre_Raza}} </td>
      <td> {{$conejo->Genero}} </td>
      <td> {{$conejo->Status}} </td>
      <td> {{$conejo->Engorda}} </td>
      <td></td>
      <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/tatuaje/' . $conejo->Id_Conejo)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo" value="{{$conejo->Id_Conejo}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/tatuaje/' . $conejo->Id_Conejo . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
      </td>
      </div>
    </td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>

</div>
@endsection
