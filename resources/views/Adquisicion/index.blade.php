@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include(compartidas.alertas)
              <form method="get" action="{{url('adquisicion/')}}">
              <center><h2><label for="Adquisicion">Tipos de Adquisición</label></h2></center>
              <div class="form-group">
                <label for="id_adquisicion">Nombre de adquisición</label>
                <input type="" class="form-control" name="Id_Adquisicion" placeholder="Buscar">
                <br>
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="{{url('/adquisicion/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>

              </div>
            </form>
            <table class="table table-sm table-responsive">
      <thead class="thead-default">
        <tr>
          <th>Codigo de Adquisición</th>
          <th>Nombre de Adquisición</th>
          <th>Descripcion de Adquisición</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($adquisiciones as $adquisicion)
          <td>{{$adquisicion->Id_Adquisicion}}</td>
          <td>{{$adquisicion->Nombre_Adquisicion}}</td>
          <td>{{$adquisicion->Descripcion_Adquisicion}}</td>

          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/adquisicion/' . $adquisicion->Id_Adquisicion)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Adquisicion" value="{{$adquisicion->Id_Adquisicion}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/adquisicion/' . $adquisicion->Id_Adquisicion . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    </div>

</form>

@endsection
