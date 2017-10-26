@extends('layouts.Principal')
@section('content')
<div class="container">
          <center><h2>Coneja Productora</h2></center>
          <form>
          <div class="form-group">
            <label for="Coneja_Productora">Número de tatuaje de la coneja:</label>
            <select class="form-control" name="Id_Conejo">
            <option>018273</option>
            <option>716252</option>
            <option>012726</option>
            </select>
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/productora/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
      
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Código de conejo:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>986544</td>
      <td><div align="right"><div class="btn-group btn-group-sm" role="group" aria-label="">
      <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
      <button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
      </div></td>
    </tr>

  </tbody>
</table>

</div>
@endsection