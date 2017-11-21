@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Grupos Registrados</h2></center>
          <form>
            <div class="form-group">
              <label for="">Grupo:</label>
              <input type="" name="Clave_Grupo" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>
            <a href="{{url('/grupo/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Clave grupo:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($grupos as $grupo)
      <td> {{$grupo->Clave_Grupo}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
