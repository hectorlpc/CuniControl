@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Conejos Sementales</h2></center>
          <form>
            <div class="form-group">
              <label for="Conejo_Cemental">Tatuaje del Semental:</label>
              <input type="" name="Id_conejo_Macho" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>
            <a href="{{url('/cemental/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>

        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Conejo Semental:</th>
      <th>Raza Conejo:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($cementales as $cemental)
      @if($cemental->Status == 'Activo')
      <td> {{$cemental->Id_Conejo_Macho}} </td>
      <td> {{$cemental->raza->Nombre_Raza}} </td>
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
