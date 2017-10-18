@extends('layouts.Principal')
@section('content')
<div class="container">
          <form>
            <h2>Inicio Registro Montas</h2>
          <div class="form-group">
            <label for="">Fecha de Monta</label>
            <input type="date" class="form-control" id="" placeholder="Buscar">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha Monta</th>
      <th>Numero Coneja</th>
      <th>Numero Coneja</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2017/10/16</td>
      <td>23012</td>
      <td>24002</td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>

        </div>
    </tr>

  </tbody>
</table>

</div>
@endsection
