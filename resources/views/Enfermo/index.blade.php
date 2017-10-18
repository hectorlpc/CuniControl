@extends('layouts.Principal')
@section('content')
<div class="container">
          <h2>Inicio Conejo Enfermo</h2>
          <form>
          <div class="form-group">
            <label for="">Tatuaje del conejo: </label>
            <select class="form-control" name="Tatuajes">
            <option>123436</option>
            <option>9823</option>
            <option>98373</option>
            </select>
            <br>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <button type="submit" class="btn btn-outline-success">Agregar</button>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Enfermedad diagnosticada:</th>
      <th>Medicamento suministrado:</th>
      <th>Inicio de tratamiento:</th>
      <th>Fin de tratamiento</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Diarrea</td>
      <td>Solución salina</td>
      <td>10/10/2017</td>
      <td>17/10/2017</td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
        <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
        </div>
      </td>
    </tr>

  </tbody>
</table>

</div>
@endsection
