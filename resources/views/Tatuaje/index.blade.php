@extends('layouts.Principal')
@section('content')

<div class="container">
          <h2>Inicio Tatuado de Conejos</h2>
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
      <th>Numero de tatuaje de la madre:</th>
      <th>Numero de tatuaje del padre:</th>
      <th>Raza:</th>
      <th>Genero:</th>
      <th>Fecha de nacimiento:</th>
      <th>Peso al nacer(kg.):</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1872635</td>
      <td>093652</td>
      <td>FESC</td>
      <td>Macho</td>
      <td>15/10/2017</td>
      <td>0.200</td>
      <td><div class="btn-group btn-group-sm" role="group" aria-label="">
      <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
      </div></td>
    </tr>

  </tbody>
</table>

</div>
@endsection