@extends('layouts.Principal')
@section('content')

<div class="container">
          <h2>Deceso de conejos</h2>
          <form method="get" action="{{url('baja/')}}">
          <div class="form-group">
            <label hidden for="">Tatuaje del conejo: </label>
            <input hidden type="" class="form-control" name="Id_Conejo" placeholder="Introduce tatuajes sin espacio">
            <br>
            <button hidden type="submit" class="btn btn-outline-primary">Buscar</button> 
            <a hidden href="" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>       
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
    @if($conejo->Status == 'Muerto')
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
    @endforeach
  </tbody>
</table>

</div>
@endsection