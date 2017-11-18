@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Conejas productoras</h2></center>
      <form method="get" action="{{url('/productora')}}">
          <div class="form-group">
            <label for="">Tatuaje productora:</label>
            <input type="" class="form-control" name="Id_Conejo_Hembra" placeholder="Buscar">
            <br>
          <div align="right">  <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/productora/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
            </div>
          </div>
        </form>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Conejo:</th>
      <th>Raza:</th>
      <th>Numero:</th>
      <th>Fecha Alta:</th>
      <th>Montas:</th>
      <th>Positivas:</th>
      <th>Ultima monta:</th>
      <th>Status:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($productoras as $productora)
      {{-- @if($productora->Status != 'Baja') --}}
      <td> {{substr($productora->Id_Conejo_Hembra,0,5) . ' - ' . substr($productora->Id_Conejo_Hembra,5,11)}} </td>
      <td> {{$productora->raza->Nombre_Raza}} </td>
      <td> {{$productora->Numero_Conejo}} </td>
      <td> {{$productora->Fecha_Activo}} </td>
      <td> {{$productora->Numero_Monta}} </td>
      <td> {{$productora->Monta_Positiva}} </td>
      <td> {{$productora->Fecha_Ultima_Monta}} </td>
      <td> {{$productora->Status}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/productora/' . $productora->Id_Conejo_Hembra)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo_Hembra" value="{{$productora->Id_Conejo_Hembra}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/productora/' . $productora->Id_Conejo_Hembra . '/edit')}}" class="btn btn-secondary btn-outline-info">Dar de baja</a>
        </div>
      </td>
    </tr>
      {{-- @endif --}}
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
