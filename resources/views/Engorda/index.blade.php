@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Conejos de engorda</h2></center>
      <form method="get" action="{{url('/engorda')}}">
          <div class="form-group">
            <label for="">Tatuaje semental:</label>
            <input type="" class="form-control" name="Id_Conejo_" placeholder="Buscar">
            <br>
          <div align="right">  <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/engorda/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
            </div>
          </div>
        </form>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Jaula:</th>
      <th>Conejo:</th>
      <th>Raza:</th>
      <th>Fecha Nacimiento:</th>
      <th>Status:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($engordas as $engorda)
      <th> {{$engorda->Id_Jaula}} </th>
      <td> {{substr($engorda->Id_Conejo,0,5) . ' - ' . substr($engorda->Id_Conejo,5,11)}} </td>
      <td> {{$engorda->raza->Nombre_Raza}} </td>
      <td> {{$engorda->Fecha_Nacimiento}} </td>
      <td> {{$engorda->Status}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
{{--           <form method="POST" action="{{url('/engorda/' . $engorda->Id_Conejo_)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo_" value="{{$engorda->Id_Conejo_}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> --}}
        @if($engorda->Status != 'Baja')
           <a href="{{url('/engorda/' . $engorda->Id_Conejo. '/edit')}}" class="btn btn-secondary btn-outline-info">Actualizar</a>
        @endif
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection