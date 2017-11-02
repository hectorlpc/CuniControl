@extends('layouts.Principal')
@section('content')
<div class="container">
          <center><h2>Grupos Registrados</h2></center>
          <form>
            <div class="form-group">
              <label for="">Grupo:</label>
              <input type="" name="Id_Grupo" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>              
            <a href="{{url('/grupo/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
      
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Clave grupo:</th>
      <th>Nombre carera:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($grupos as $grupo)
      <td> {{$grupo->Id_Grupo}} </td>
      <td> {{$grupo->carrera->Nombre_Carrera}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/grupo/' . $grupo->Id_Grupo)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Grupo" value="{{$grupo->Id_Grupo}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/grupo/' . $grupo->Id_Grupo . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>

</div>
@endsection