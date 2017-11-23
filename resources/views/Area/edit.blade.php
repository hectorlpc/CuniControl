@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')

      <div class="container">
        <center><h2>Actualizar Registro De Área:</h2></center>
    </br>
          <form action="{{url('/area/' . $area->Id_Area)}}" method="POST" role="form">
            {{method_field('patch')}}
            {{ csrf_field() }}
          <div class="form-group">
            <label for="Raza">Código:</label>
           <input readonly class="form-control" type="text" name="Id_Area" value= "{{$area->Id_Area}}">
          </div>
          <div class="form-group">
            <label for="Raza">Nombre:</label>
            <input class="form-control" type="text" name="Nombre_Area" value= "{{$area->Nombre_Area}}">
          </div>
          <div class="form-group">
            <label for="Raza">Descripción:</label>
            <input class="form-control" type="text" name="Descripcion_Area" value="{{$area->Descripcion_Area}}">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>


        </form>
      </div>


@endsection