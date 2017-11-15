@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  <center><h2>Registro de Horas - Actividades</h2></center>
</br>
    <form  action="{{url('/horas')}}" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Fecha en que realizó actividades:</label>

      <input class="form-control" type="date" name="Fecha" min="2000-01-01" max="2050-01-01" step="1">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Hora de entrada:</label>

      <input class="form-control" type="time" name="Hora_Entrada">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword2">Hora de Salida:</label>

      <input class="form-control" type="time" name="Hora_Salida">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword2">Actividad realizada:</label>


    <select class="form-control" name="Id_Actividad">
      <option> -- Seleccione la actividad realizada -- </option>
                 @foreach ($actividades as $actividad)
                  <option value="{{$actividad->Id_Actividad}}">{{$actividad->Nombre_Actividad}}</option>
                 @endforeach
      </select>
    </div>
  <br>
  <div align="right">
    <button type="submit" class="btn btn-outline-primary">Registrar Actividades</button>
    </div>

  </form>
</div>
@endsection
