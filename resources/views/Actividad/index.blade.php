@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Inicio Actividad</h2>
        <form>
          <div class="form-group">
              <label for="">Nombre Actividad:</label>
              <input type="text" class="form-control" id="" placeholder="Buscar">
              <br>
              <div align="right">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
                <button type="button" class="btn btn-outline-success">Agregar</button>
              </div>
          </div>
        </form>
        <div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
          <thead class="thead-default">
            <tr>
              <th>Id Actividad</th>
              <th>Nombre Actividad</th>
              <th>Descripción</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>DESGAZ</td>
              <td>Destetar Gazapos</td>
              <td>Retirar los gazapos de la coneja madre para despues Tatuar y colocarlos en jaula diferentes</td>
              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="">
                <div align="right">
                <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
                </div>
            </tr>
            <tr>
              <td>DESGAZ</td>
              <td>Destetar Gazapos</td>
              <td>Retirar los gazapos de la coneja madre para despues Tatuar y colocarlos en jaula diferentes</td>
              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="">
                <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button></td>
                </div>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
@endsection
