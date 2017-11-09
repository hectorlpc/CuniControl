@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  <h2>Actualizar Registro de Horas- Actividades</h2>
</br>
    <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Fecha:</label>
      <input class="form-control" type="date" name="fecha" min="2000-01-01" max="2050-01-01" step="2">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Hora de entrada:</label>
      <input class="form-control" type="time" name="hora">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword2">Hora de Salida:</label>
      <input class="form-control" type="time" name="hora">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword2">Actividad realizada:</label>
    <select class="form-control" name="Actividades">
      <option>Tatuado de conejos</option>
      <option>Supervisión de la monta</option>
      <option>Diagnóstico de gestación</option>
      <option>Supervisión de gestación</option>
      <option>Supervisión de parto</option>
      <option>Registro de destete</option>
      <option>Registro de donación</option>
      <option>Registro de Conejo enfermo</option>
      </select>
    </div>
  </br>
  <div align="right">
  <button type="submit" class="btn btn-outline-primary">Actualizar Actividades</button>
  </div>
  </form>
</div>

@endsection
