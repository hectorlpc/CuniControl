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
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Conejo:</th>
      <th>Raza:</th>
      <th>Fecha Alta:</th>
      <th>Montas:</th>
      <th>Positivas:</th>
      {{-- <th>Última monta:</th> --}}
      <th>Status:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($cementales as $cemental)
      <td> {{substr($cemental->Id_Conejo_Macho,0,5) . ' - ' . substr($cemental->Id_Conejo_Macho,5,11)}} </td>
      <td> {{$cemental->raza->Nombre_Raza}} </td>
      <td> {{$cemental->Fecha_Activo}} </td>
      <td> {{$cemental->Numero_Monta}} </td>
      <td> {{$cemental->Monta_Positiva}} </td>
      {{-- <td> {{$cemental->Fecha_Ultima_Monta}} </td> --}}
      <td> {{$cemental->Status}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
        @if($cemental->Numero_Monta == 0)          
          <form method="POST" action="{{url('/cemental/' . $cemental->Id_Conejo_Macho)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo_Macho" value="{{$cemental->Id_Conejo_Macho}}">
          <div align="right">  <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form>
        @endif
           <a href="{{url('/cemental/' . $cemental->Id_Conejo_Macho . '/edit')}}" class="btn btn-secondary btn-outline-info">Dar de baja</a>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
