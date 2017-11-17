@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <center><h2>Jaulas</h2></center>
          <form>
            <div class="form-group">
              <label for="">Buscar jaula:</label>
              <input type="" name="Id_Jaula" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>
            <a href="{{url('/jaula/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
<div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Numero de Jaula:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($jaulas as $jaula)
      <td> {{$jaula->Id_Jaula}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/jaula/' . $jaula->Id_Jaula)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Jaula" value="{{$jaula->Id_Jaula}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
