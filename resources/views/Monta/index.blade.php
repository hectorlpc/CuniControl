@extends('layouts.Principal')
@section('content')
<div class="container">
      <form method="get" action="{{url('/monta')}}">
            <h2>Inicio Registro Montas</h2>
          <div class="form-group">
            <label for="">Fecha de Monta:</label>
            <input type="date" class="form-control" name="Fecha_Monta" placeholder="Buscar">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </form>
      <a href="{{url('/monta/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>             
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha de Monta (Año - Mes - Día)</th>
      <th>Tatuaje Coneja</th>
      <th>Tatuaje Conejo</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($montas as $monta)
      <td>{{$monta->Fecha_Monta}}</td>
      <td>{{$monta->Id_Conejo_Hembra}}</td>
      <td>{{$monta->Id_Conejo_Macho}}</td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/monta/' . $monta->Fecha_Monta)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo_Hembra" value="{{$monta->Id_Conejo_Hembra}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/monta/' . $monta->Fecha_Monta . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>

</div>
@endsection
