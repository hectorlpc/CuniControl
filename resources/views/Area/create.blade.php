@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Área Destino:</h2></center>
    </br>
          <form action="{{url('/area')}}" method="post">
          <div class="form-group">
            <label for="Raza">Nombre del Área:</label>
            <input class="form-control" type="text" name="Nombre_Area">
          </div>
          <div class="form-group">
            <label for="Raza">Descripción del Área:</label>
            <input class="form-control" type="text" name="Descripcion_Area">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>


@endsection