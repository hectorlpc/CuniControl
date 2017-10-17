@extends('layouts.Principal')
@section('content')
<div class="container">
          <form>
          <div class="form-group">
            <label for="">Fecha de Monta</label>
            <input type="date" class="form-control" id="" placeholder="Buscar">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </form>
        <table class="table table-striped table-inverse">
  <thead>
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
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>

  </tbody>
</table>

</div>
@endsection
