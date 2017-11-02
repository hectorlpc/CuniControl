@extends('layouts.Principal')
@section('content')
<div class="container">
          <center><h2>Materias Registradas</h2></center>
          <form>
            <div class="form-group">
              <label for="">Clave Materia:</label>
              <input type="" name="Id_Carrera" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>              
            <a href="{{url('/materia/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
      
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Clave:</th>
      <th>Materia:</th>
      <th>Grupo:</th>
      <th>Carrera:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($materias as $materia)
      <td> {{$materia->Id_Materia}} </td>
      <td> {{$materia->Nombre_Materia}} </td>
      <td> {{$materia->Id_Grupo}} </td>
      <td> {{$materia->grupo->carrera->Nombre_Carrera}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/materia/' . $materia->Id_Materia)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Materia" value="{{$materia->Id_Materia}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/materia/' . $materia->Id_Materia . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>

</div>
@endsection