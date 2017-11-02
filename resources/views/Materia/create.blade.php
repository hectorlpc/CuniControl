@extends('layouts.Principal')
@section('content')

    <section class="contenedorPrincipal">


      <div class="container">
        <center><h2>Registro De Materias:</h2></center>

    </br>
          <form action="{{url('/materia')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label>Clave de materia:</label>
            <input class="form-control" name="Id_Materia">
          </div>
          <div class="form-group" >
            <label>Nombre de la materia:</label>
            <input class="form-control" name="Nombre_Materia">
          </div>
          <div class="form-group">
            <label for="">Carrera a la que pertenece:</label>
            <select class="form-control" name="Id_Carrera" id="carrera">
              <option> -- Seleccione Carrera -- </option>  
              @foreach($carreras as $carrera)
                  <option value="{{$carrera->Id_Carrera}}">{{$carrera->Nombre_Carrera}}</option>
              @endforeach
            </select>
          <div class="form-group">
            <label for="">Grupo:</label>
            <select class="form-control" name="Id_Grupo" id="grupos">
            </select>
          </div>            
          </div>                     
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>

    </section>

@endsection
