@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Conejos de engorda</h2></center>
      <form method="get" action="{{url('/engorda')}}">
          <div class="form-group">
            <label for="">Tatuaje del conejo:</label>
            <input class="form-control" name="Id_Conejo_Engorda" placeholder="Buscar">
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
      <th>Conejo:</th>
      <th>Raza:</th>
      <th>Fecha de Nacimiento:</th>
      <th>Status:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($conejos as $conejos)
      <td> {{$engorda->Id_Jaula}} </td>
      <td> {{substr($engorda->Id_Conejo,0,5) . ' - ' . substr($engorda->Id_Conejo,5,11)}} </td>
      <td> {{$engorda->raza->Nombre_Raza}} </td>
      <td> {{$engorda->Fecha_Alta}} </td>
      <td> {{$engorda->Genero}} </td>
      <td> {{$engorda->Status}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/engorda/' . $engorda->Id_Conejo_Engorda)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo_Engorda" value="{{$engorda->Id_Conejo_Engorda}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/engorda/' . $engorda->Id_Conejo_Engorda . '/edit')}}" class="btn btn-secondary btn-outline-info">Dar de baja</a>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
