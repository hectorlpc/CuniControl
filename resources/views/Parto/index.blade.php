@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  <center><h2>Supervision de parto</h2></center>
      <form method="get" action="{{url('/parto')}}">
        <div class="form-group">
          <label for="">Numero de coneja: </label>
          <input type="" class="form-control" name="Id_Conejo_Hembra" placeholder="Buscar por tatuaje">
          <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          <a href="{{url('/parto/create')}}" type="button" class="btn btn-outline-success">Agregar</a>
          </div>
        </div>
      </form>
      <table class="table table-sm table-responsive">
<thead class="thead-default">
  <tr>
    <th>Fecha de Parto</th>
    <th>Tatuaje Coneja</th>
    <th>Fecha de Monta</th>
    <th>Cant.gazapos vivos</th>
    <th>Cant.de gazapos muertos</th>
    <th>Peso promedio al nacer(g)</th>
    <th></th>
  </tr>
</thead>
<tbody>
  <tr>
    @foreach($partos as $parto)
    <td>{{$parto->Fecha_Parto}}</td>
    <td>{{$parto->monta->Id_Conejo_Hembra}}</td>
    <td>{{$parto->monta->Fecha_Monta}}</td>
    <td>{{$parto->Numero_Vivos}}</td>
    <td>{{$parto->Numero_Muertos}}</td>
    <td>{{$parto->Peso_Nacer}}</td>
    <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="">
        <form method="POST" action="{{url('/parto/' . $parto->Id_Parto)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
        </form>
        <a href="{{url('/parto/' . $parto->Id_Parto . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </td>
      </div>
  </tr>
  @endforeach
</tbody>
</table>

</div>
@endsection
