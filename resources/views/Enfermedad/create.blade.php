
@extends('layouts.Principal')
@section('content')
      <div class="container">
        <center><h2>Registro De Enfermedades:</h2></center>
    </br>
          <form action="{{url('/enfermedad')}}" method="post">
           {{ csrf_field() }}
          <div class="form-group">
            <label for="registroEnfermedad">Nombre de la enfermedad:</label>
            <input class="form-control" type="text" name="Nombre_Enfermedad">
          </div>
          <div class="form-group">
            <label for="registroEnfermedad">Descripción de la enfermedad:</label>
            <input class="form-control" type="text" name="Descripcion_Enfermedad">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>

        </form>
      </div>
@endsection
