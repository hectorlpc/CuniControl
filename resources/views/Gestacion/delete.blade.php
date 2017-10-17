@extends('layouts.Principal')
@section('content')
<div class="container">
          <form>
          <div class="form-group">
            <label for="">Fecha de diagnostico</label>
            <input type="date" class="form-control" id="" placeholder="Buscar">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </form>
        <table class="table table-striped table-inverse">
  <thead>
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
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>

  </tbody>
</table>

</div>
@endsection
