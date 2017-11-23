@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

  <center><h2>Supervisión de parto</h2></center>
      <form method="get" action="{{url('/parto')}}">
        <div class="form-group">
          <label for="">Número de coneja: </label>
          <input type="" class="form-control" name="Id_Conejo_Hembra" placeholder="Buscar por tatuaje">
          <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          <a href="{{url('/parto/create')}}" type="button" class="btn btn-outline-success">Agregar</a>
          </div>
        </div>
      </form>
    <div style="overflow-x:auto;">  <table class="table table-sm table-responsive">
<thead class="thead-default">
  <tr>
    <th>Fecha de Parto</th>
    <th>Tatuaje Coneja</th>
    {{-- <th>Fecha de Monta</th> --}}
    <th>Cant.gazapos vivos</th>
    <th>Cant.de gazapos muertos</th>
    <th>Peso promedio(g)</th>
    <th>Registró</th>
    <th>Actualizó</th>
    <th></th>
  </tr>
</thead>
<tbody>
  <tr>
    @foreach($partos as $parto)
    <td> {{$parto->Fecha_Parto}} </td>
    <td> {{substr($parto->monta->Id_Conejo_Hembra,0,5) . ' - ' . substr($parto->monta->Id_Conejo_Hembra,5,11)}} </td>
    {{-- <td> {{$parto->monta->Fecha_Monta}} </td> --}}
    <td> {{$parto->Numero_Vivos}} </td>
    <td> {{$parto->Numero_Muertos}} </td>
    <td> {{$parto->Peso_Nacer}} </td>
    <td> {{$parto->Creador}} </td>
    <td> {{$parto->Modificador}} </td>
    <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="">
        {{-- <form method="POST" action="{{url('/parto/' . $parto->Id_Parto)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
         <div align="right"> <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
        </form> --}}
        <div align="right"><a href="{{url('/parto/' . $parto->Id_Parto . '/edit')}}" class="btn btn-secondary btn-outline-info">Actualizar</a>
        </td>
      </div>
  </tr>
  @endforeach
</tbody>
</table></div>

</div>
@endsection
