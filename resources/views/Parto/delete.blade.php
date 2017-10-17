@extends('layouts.Principal')
@section('content')
<label for="destete">SUPERVISION DE PARTO</label>


    <div class="container">
            <form>
            <div class="form-group">
              <label for="">Numero de parto</label>
              <input type="date" class="form-control" id="" placeholder="Buscar">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
          </form>
          <table class="table table-striped table-inverse">
    <thead>
      <tr>
        <th>Numero de parto</th>
        <th>Numero de gestacion</th>
        <th>Fecha de parto</th>
        <th>Cantidad de gazapos vivos</th>
        <th>Cantidad de gazapos muertos</th>
        <th>Peso promedio al nacer(Gramos)</th>
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
        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
      </tr>

    </tbody>
  </table>

  </div>
@endsection
