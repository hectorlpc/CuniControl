@extends('layouts.Principal')
@section('content')
<div class="container">
          <center><h2>Conejo Adquirido</h2></center>
          <form>
            {{ csrf_field() }}
          <div class="form-group">
            <label for="">Número de tatuaje del conejo:</label>
            <select class="form-control" name="Id_Conejo">
            <option>9826152</option>
            <option>9761521</option>
            <option>3751836</option>
            </select>
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <button type="submit" class="btn btn-outline-success">Agregar</button>
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Tipo de adquisición:</th>
      <th>fecha de adquisición:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Donación</td>
      <td>22/10/2017</td>
      <td><div align="right"><div class="btn-group btn-group-sm" role="group" aria-label="">
      <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
      </div></td>
    </tr>

  </tbody>
</table>

</div>

@endsection