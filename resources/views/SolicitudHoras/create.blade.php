@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
            <form action="{{url('/solicitudHoras')}}" method="post">
        <center><h2>Solicitud De Horas Practicas:</h2></center>
      </br>
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
            <label for="exampleInputPassword2">Cantidad de horas prácticas a cumplir:</label>
            <input type="number" name="Horas_Totales" min="0" max="500">
          </div> 
        </br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Solicitar</button>
        </form>
      </div>
    @endsection
