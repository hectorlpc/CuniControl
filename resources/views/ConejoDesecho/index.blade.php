@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <center><h2>Conejos de Desecho</h2></center>
          <form>
            <div class="form-group">
              <label for="">Tatuaje del conejo:</label>
              <input type="" name="Id_Conejo_Desecho" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>
            <a href="{{url('/desecho/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>

        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Tatuaje del Conejo:</th>
      <th>Raza Conejo:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($conejos as $conejo)
      <td> {{$conejo->Id_Conejo_Desecho}} </td>
      <td> {{$conejo->raza->Nombre_Raza}} </td>
    </tr>
      @endforeach
  </tbody>
</table>

</div>
@endsection