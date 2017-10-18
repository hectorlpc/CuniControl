@extends('layouts.Principal')
@section('content')
<div class="container">
  <h2>Inicio Registro de Diagnostico de Gestacion</h2>
          <form>
          <div class="form-group">
            <label for="">Fecha de diagnostico</label>
            <input type="date" class="form-control" id="" placeholder="Buscar">
            <br>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <button type="submit" class="btn btn-outline-success">Buscar</button>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha Diagnostico</th>
      <th>Numero Coneja</th>
      <th>Resultado Diagnostico</th>
      <th>Fecha Tentativa Parto</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2017/10/16</td>
      <td>23012</td>
      <td>Positivo</td>
      <td>2017/11/10</td>
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
