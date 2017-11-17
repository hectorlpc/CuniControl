@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <h2>Registro de conejos de engorda</h2>
          <form method="get" action="{{url('engorda/')}}">
          <div class="form-group">
            <label hidden for="">Tatuaje del conejo: </label>
            <input hidden type="" class="form-control" name="Id_Conejo" placeholder="Introduce tatuajes sin espacio">
            <br>
            <button hidden type="submit" class="btn btn-outline-primary">Buscar</button>
            <a hidden href="" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
        <div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha Nacimiento:</th>
      <th>Tatuaje Derecho:</th>
      <th>Tatuaje Izquierdo:</th>
      <th>Raza:</th>
      <th>Genero:</th>
      <th>Status:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($conejos as $conejo)
    @if($conejo->Engorda == 'Si')
    @if($conejo->Status == 'Vivo')
      <td> {{$conejo->Fecha_Nacimiento}} </td>
      <td> {{$conejo->Tatuaje_Derecho}} </td>
      <td> {{$conejo->Tatuaje_Izquierdo}} </td>
      <td> {{$conejo->raza->Nombre_Raza}} </td>
      <td> {{$conejo->Genero}} </td>
      <td> {{$conejo->Status}} </td>
      </div>
    </td>
    </tr>
    @endif
    @endif
    @endforeach
  </tbody>
</table>
</div>
<a href="{{url('/engorda/pdf')}}" type="submit" class="btn btn-outline-success">Imprimir</a>
</div>
@endsection
