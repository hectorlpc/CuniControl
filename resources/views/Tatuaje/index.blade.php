@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")
          <h2>Inicio Tatuado de Conejos</h2>
          <form method="get" action="{{url('/tatuaje')}}">
          <div class="form-group">
            <label for="">Tatuaje del conejo: </label>
            <input type="" class="form-control" name="Id_Conejo" placeholder="Introduce tatuajes sin espacio">
            <br>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/tatuaje/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
        <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha Nacimiento:</th>
      <th>Tatuajes (D - I):</th>
      <th>Raza:</th>
      <th>Jaula:</th>
      <th>Genero:</th>
      <th>Status:</th>
      <th>Desecho:</th>
      <th>Engorda:</th>
      <th>Productora:</th>
      <th>Semental:</th>
      <th>Fecha Muerte:</th>
      <th>Registró</th>
      <th>Actualizó</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($conejos as $conejo)
    {{-- @if($conejo->Status == 'Vivo') --}}
    {{-- @if($conejo->Desecho == 'No') --}}
    {{-- @if($conejo->Engorda != 'No') --}}
      <td> {{$conejo->Fecha_Nacimiento}} </td>
      <td> {{substr($conejo->Id_Conejo, 0, 5) . ' - ' . substr($conejo->Id_Conejo, 5 , 11)}} </td>
      <td> {{$conejo->raza->Nombre_Raza}} </td>
      <td> {{$conejo->Id_Jaula}} </td>
      <td> {{$conejo->Genero}} </td>
      <td> {{$conejo->Status}} </td>
      <td> {{$conejo->Desecho}} </td>
      <td> {{$conejo->Engorda}} </td>
      <td> {{$conejo->Productora}} </td>
      <td> {{$conejo->Semental}} </td>
      <td> {{$conejo->Fecha_Muerte}} </td>
      <td> {{$conejo->Creador}} </td>
      <td> {{$conejo->Modificador}} </td>
      <td></td>
      <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/tatuaje/' . $conejo->Id_Conejo)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo" value="{{$conejo->Id_Conejo}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/tatuaje/' . $conejo->Id_Conejo . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
      </td>
      </div>
    </td>
    </tr>
{{--     @endif
    @endif
    @endif --}}
    @endforeach
  </tbody>
</table></div>

</div>
@endsection
