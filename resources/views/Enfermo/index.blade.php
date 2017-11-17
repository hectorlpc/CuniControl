@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

<center><h2>Inicio Conejo Enfermo</h2></center>
      <form method="get" action="{{url('/enfermo')}}">
          <div class="form-group">
              <label for="">Tatuaje del conejo: </label>
                  <div class="form-group">
                    <input type="" class="form-control" name="Id_Conejo" placeholder="Introduce tatuajes sin espacio">
                  </div>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
              <a href="{{url('/enfermo/create')}}" type="submit" class="btn btn-outline-success">Agregar</a></div>
          </div>
      </form>
      <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
          <thead class="thead-default">
              <tr>
                  <th>Id Conejo Enfermo:</th>
                  <th>Enfermedad:</th>
                  <th>Medicamento :</th>
                  <th>Inicio de tratamiento:</th>
                  <th>Fin de tratamiento</th>
                  <th>Registró</th>
                  <th>Actualizó</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                @foreach($enfermos as $enfermo)
                  @foreach($enfermo->tratamientos() as $tratamiento)
                    <td> {{$enfermo->Id_Conejo}} </a></td>
                    <td> {{$tratamiento->Nombre_Enfermedad}} </td>
                    <td> {{$tratamiento->Nombre_Medicamento}} </td>
                    <td> {{$enfermo->Fecha_Inicio}} </td>
                    <td> {{$enfermo->Fecha_Fin}} </td>
                    <td> {{$enfermo->Creador}} </td>
                    <td> {{$enfermo->Modificador}} </td>
                    <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="">
                        <form method="POST" action="{{url('/enfermo/' . $enfermo->Id_Conejo)}}">
                          {{csrf_field()}}
                          {{method_field('delete')}}
                          <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
                        </form> <a href="{{url('/enfermo/' . $enfermo->Id_Conejo . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
                    </div>
                  </td>
              </tr>
              @endforeach
            @endforeach
          </tbody>
      </table></div>
@endsection
