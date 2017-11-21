@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        @if(is_null($periodo))
          <center><h2>No hay periodo activo, contacta al encargado del módulo para poder de dar de alta tus materias</h2>
            <a href="{{url('/home')}}" class="btn btn-outline-primary">Volver a inicio </a> </li>
    @else
            <form action="{{url('/solicitudHoras')}}" method="post">
        <center><h2>Solicitud De Horas Practicas:</h2></center>
      </br>
      <div class="form-group" >
            <label>Periodo Activo:</label>
            <input readonly class="form-control" name="Id_Periodo" value={{$periodo->Id_Periodo}}>
          </div>
      <div class="form-group">
            <label for="exampleInputEmail1"> Fecha de la solicitud:</label>
            <input class="form-control" readonly type="date" name="Fecha_Solicitud" value="{{$fecha=date('Y-m-d')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Asignatura:</label>
          <select class="form-control" name="Id_Materia">
               <option> -- Seleccione la materia -- </option>
                 @foreach ($materias as $materia)
                  <option value="{{$materia->Id_Materia}}">{{$materia->Nombre_Materia}}</option>
                 @endforeach
          </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Grupo:</label>
          <select class="form-control" name="Id_Grupo">
            <option> -- Seleccione el grupo -- </option>
                 @foreach ($grupos as $grupo)
                  <option value="{{$grupo->Id_Grupo}}">{{$grupo->Clave_Grupo}}</option>
                 @endforeach
            </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Profesor:</label>
          <select class="form-control" name="CURP_Profesor">
            <option> -- Seleccione el profesor -- </option>
                 @foreach ($profesores as $profesor)
                  <option value="{{$profesor->CURP_Profesor}}">{{$profesor->usuario->Nombre_Usuario . " " . $profesor->usuario->Apellido_Paterno . " " . $profesor->usuario->Apellido_Materno}}</option>
                 @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Cantidad de horas prácticas a cumplir:</label>
            <input type="number" name="Horas_Totales" min="0" max="500">
          </div> 
        </br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Solicitar</button>
        </form>
      </div>
      @endif
    @endsection
