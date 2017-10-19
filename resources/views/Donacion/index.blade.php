@extends('layouts.Principal')
@section('content')
<div class="container">
          <h2>DONACIÓN DE GAZAPOS:</h2>
          <form>
          <div class="form-group">
            <label for="">Numero de la donación:</label>
            <select class="form-control" name="Tatuajes">
            <option>DO9721</option>
            <option>DO6154</option>
            <option>DO6243</option>
            </select>
            <br>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <button type="submit" class="btn btn-outline-success">Agregar</button>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Parto donante:</th>
      <th>Parto receptor:</th>
      <th>No. de gazapos donados:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>PA8716</td>
      <td>PA0917</td>
      <td>3<td>
      <td><div class="btn-group btn-group-sm" role="group" aria-label="">
      <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
      </div></td>
    </tr>

  </tbody>
</table>

</div>
@endsection