@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <h2>Inicio Registro de Horas</h2>
          <form>
          <div class="form-group">
            <label for="">Fecha de las actividades: </label>
            <input type="date" class="form-control" id="" placeholder="Buscar">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <button type="submit" class="btn btn-outline-success">Agregar</button>
            </div>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Hora de entrada:</th>
      <th>Hora de salida:</th>
      <th>Actividad realizada</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>09:10:a.m</td>
      <td>11:00:a.m</td>
      <td>Diagnostico gestación</td>
      <td><div class="btn-group btn-group-sm" role="group" aria-label="">
      <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
      </div></td>
    </tr>

  </tbody>
</table>

</div>

@endsection
