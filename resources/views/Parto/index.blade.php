@extends('layouts.Principal')
@section('content')
<label for="destete">SUPERVISION DE PARTO</label>
<div class="container">
        <form>
        <div class="form-group">
          <label for="">Numero de parto</label>
          <input type="date" class="form-control" id="" placeholder="Buscar">
          <br>
          <button type="submit" class="btn btn-outline-primary">Buscar</button>
          <td><button type="button" class="btn btn-outline-success">Agregar</button></td>
        </div>
      </form>
      <table class="table table-sm table-responsive">
<thead class="thead-default">
  <tr>
    <th>No.Parto</th>
    <th>No. Gestacion</th>
    <th>Fecha de parto</th>
    <th>Cant.gazapos vivos</th>
    <th>Cant.de gazapos muertos</th>
    <th>Peso promedio al nacer(g)</th>
    <th></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>parto 1</td>
    <td>gestacion 1</td>
    <td>25/10/2017</td>
    <td>8</td>
    <td>2</td>
    <td>300 g</td>
    <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="">
        <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>

      </div>

  </tr>

</tbody>
</table>

</div>
@endsection
