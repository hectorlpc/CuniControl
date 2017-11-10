@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

      <form method="get" action="{{url('/monta')}}">
            <h2>Inicio Registro Montas</h2>
          <div class="form-group">
            <label for="">Fecha de Monta:</label>
            <input type="" class="form-control" name="Id_Conejo_Hembra" placeholder="Buscar Coneja">
            <br>
          <div align="right">  <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/monta/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
            </div>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha de Monta (Año-Mes-Día)</th>
      <th>Tatuaje Coneja</th>
      <th>Tatuaje Conejo</th>
      <th>Fecha Diagnostico</th>
      <th>Resultado Diagnostico</th>
      <th>Fecha_Parto</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($montas as $monta)
      <td> {{$monta->Fecha_Monta}} </td>
      <td> {{$monta->Id_Conejo_Hembra}} </td>
      <td> {{$monta->Id_Conejo_Macho}} </td>
      <td> {{$monta->Fecha_Diagnostico}} </td>
      <td> {{$monta->Resultado_Diagnostico}} </td>
      <td> {{$monta->Fecha_Parto}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/monta/' . $monta->Id_Monta)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Monta" value="{{$monta->Id_Monta}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/monta/' . $monta->Id_Monta . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>

</div>
@endsection
