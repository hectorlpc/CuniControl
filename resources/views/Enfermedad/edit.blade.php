@extends('layouts.Principal')
@section('content')
      <div class="container">
        <center><h2>Actualizar Registro De Enfermedades:</h2></center>
    </br>
          <form action="{{url('/enfermedad/' . $enfermedad->Id_Enfermedad)}}" method="POST" role="form">
            {{method_field('patch')}}
            {{ csrf_field() }}
      
          <div class="form-group">
            <label for="Enfermedad">Código de la enfermedad:</label>
           <input readonly class="form-control" type="text" name="Id_Enfermedad" value="{{$enfermedad->Id_Enfermedad}}">
          </div>
          <div class="form-group">
            <label for="Enfermedad">Nombre de la enfermedad:</label>
            <input class="form-control" type="text" name="Nombre_Enfermedad" value="{{$enfermedad->Nombre_Enfermedad}}">
          </div>
          <div class="form-group">
            <label for="Enfermedad">Descripción de la enfermedad:</label>
            <input class="form-control" type="text" name="Descripcion_Enfermedad" value="{{$enfermedad->Descripcion_Enfermedad}}">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>


        </form>
      </div>
@endsection