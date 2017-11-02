@extends('layouts.Principal')
@section('content')

    <section class="contenedorPrincipal">


      <div class="container">
        <center><h2>Registro De Materias:</h2></center>

    </br>
    <form action="{{url('/materia/' . $materia->Id_Materia)}}" method="POST" role="form">
            {{ csrf_field() }}
            {{method_field('patch')}}
          <div class="form-group" >
            <label>Clave de materia:</label>
            <input class="form-control" name="Id_Materia" value="{{$materia->Id_Materia}}">
          </div>
          <div class="form-group" >
            <label>Nombre de la materia:</label>
            <input class="form-control" name="Nombre_Materia" value="{{$materia->Nombre_Materia}}">
          </div>
          <div class="form-group">
            <label for="">Carrera a la que pertenece:</label>
            <input class="form-control" readonly value="{{$materia->grupo->carrera->Nombre_Carrera}}">
          <div class="form-group">
            <label for="">Grupo:</label>
            <input class="form-control" readonly value="{{$materia->Id_Grupo}}">
          </div>            
          </div>                     
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
    </section>
@endsection
