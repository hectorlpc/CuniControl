@extends('layouts.Principal')
@section('content')
<label for="destete">INICIO DESTETE</label>

<div class="container">
              <form>
              <div class="form-group">
                <label for="">Numero de destete</label>
                <input type="date" class="form-control" id="" placeholder="Buscar">
                <br>
                <button type="submit" class="btn btn-primary">Buscar</button>
              </div>
            </form>
            <table class="table table-sm table-responsive">
      <thead class="thead-default">
        <tr>
          <th>Numero de destete</th>
          <th>Numero de parto</th>
          <th>Fecha de destete</th>
          <th>Cantidad de destetados</th>
          <th>Peso promedio de los destetados (Kilos)</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>destete 1</td>
          <td>parto 1</td>
          <td>25/10/2017</td>
          <td>18</td>
          <td>2.4 Kg</td>
          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
            <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
            </div>
        </tr>

      </tbody>
    </table>

    </div>
@endsection
