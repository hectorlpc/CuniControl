@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
<h2>Inicio Conejo Enfermo</h2>
      <form>
          <div class="form-group">
              <label for="">Tatuaje del conejo: </label>
                  <div class="form-group">
                    <input type="" class="form-control" name="Id_Conejo" id="" placeholder="Introduce tatuajes">
                  </div>
              <button type="submit" class="btn btn-outline-primary">Buscar</button>
              <button type="submit" class="btn btn-outline-success">Agregar</button>
          </div>
      </form>

      <table class="table table-sm table-responsive">
          <thead class="thead-default">
              <tr>
                  <th>Id Conejo Enfermo:</th>
                  <th>Enfermedad:</th>
                  <th>Medicamento :</th>
                  <th>Inicio de tratamiento:</th>
                  <th>Fin de tratamiento</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td "{{$enfermo->Id_Conejo}}"> {{$enfermo->Id_Conejo}}</td>
                  <td "{{$enfermo->Id_Enfermedad}}"> {{$enfermo->Id_Enfermedad}}</td>
                  <td "{{$enfermo->Id_Medicamento}}"> {{$enfermo->Id_Medicamento}}</td>
                  <td "{{$enfermo->Fecha_Inicio}}"> {{$enfermo->Fecha_Inicio}}</td>
                  <td "{{$enfermo->Fecha_Fin}}"> {{$enfermo->Fecha_Fin}}</td>
                  <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="">
                        <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><button type="button" class="btn btn-secondary btn-outline-info">Modificar</button>
                    </div>
                  </td>
              </tr>
          </tbody>
      </table>
@endsection
