@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        @if(is_null($periodo))
          <center><h2>No hay periodo activo, contacta al encargado del módulo para poder de dar de alta tus materias</h2>
            <a href="{{url('/home')}}" class="btn btn-outline-primary">Volver a inicio </a> </li>
    @else
        <center><h2>Registro De Materias:</h2></center>
    </br>
          <form action="{{url('/materia')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label>Periodo Activo:</label>
            <input readonly class="form-control" name="Id_Periodo" value={{$periodo->Id_Periodo}}>
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
          </div>

        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>
@endif
@endsection
