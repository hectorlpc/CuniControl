@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Conejos Sementales</h2></center>
      <form method="get" action="{{url('/cemental')}}">
          <div class="form-group">
            <label for="">Tatuaje semental:</label>
            <input type="" class="form-control" name="Id_Conejo_Macho" placeholder="Buscar">
            <br>
          <div align="right">  <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/cemental/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
            </div>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Conejo:</th>
      <th>Raza:</th>
      <th>Fecha Alta:</th>
      <th>Montas:</th>
      <th>Exitosas:</th>
      <th>Ultima monta:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($cementales as $cemental)
      @if($cemental->Status == 'Activo')
      <td> {{$cemental->Id_Conejo_Macho}} </td>
      <td> {{$cemental->raza->Nombre_Raza}} </td>
      <td> {{$cemental->Fecha_Activo}} </td>
      <td> {{$cemental->Numero_Monta}} </td>
      <td> {{$cemental->Monta_Positiva}} </td>
      <td> {{$cemental->Fecha_Ultima_Monta}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/cemental/' . $cemental->Id_Conejo_Macho)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo_Macho" value="{{$cemental->Id_Conejo_Macho}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/cemental/' . $cemental->Id_Conejo_Macho . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
      </td>
    </tr>
      @endif
      @endforeach
  </tbody>
</table>

</div>
@endsection
