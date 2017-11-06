@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Raza:</h2></center>
    </br>
          <form action="{{url('/raza')}}" method="post">
          <div class="form-group">
            <label for="Raza">Nombre de la raza:</label>
            <input class="form-control" type="text" name="Nombre_Raza">
          </div>
          <div class="form-group">
            <label for="Raza">Descripción de la raza:</label>
            <input class="form-control" type="text" name="Descripcion_Raza">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>


@endsection