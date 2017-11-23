@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Periodos Registrados</h2></center>
          <form>
            <div class="form-group">
              <label for="">Periodo:</label>
              <input type="" name="Id_Periodo" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>
            <a href="{{url('/periodo/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Periodo:</th>
      <th>Fecha de Inicio:</th>
      <th>Fecha de Término:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($periodos as $periodo)
      <td> {{$periodo->Id_Periodo}} </td>
      <td> {{$periodo->Fecha_Inicio}} </td>
      <td> {{$periodo->Fecha_Termino}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/periodo/' . $periodo->Id_Periodo)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Periodo" value="{{$periodo->Id_Periodo}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/periodo/' . $periodo->Id_Periodo . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
