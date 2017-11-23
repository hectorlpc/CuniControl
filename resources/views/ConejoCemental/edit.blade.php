@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizar Semental:</h2></center>
    </br>
<form action="{{url('/cemental/' . $cemental->Id_Conejo_Macho)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
<div class="form-group" >
            <label>Fecha:</label>
            <input class="form-control" type="date" name="Fecha_Muerte" value="{{$fecha = date('Y-m-d')}}">
          </div>      
          <div class="form-group" >
            <label>Tatuaje del Semental:</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Macho" value="{{$cemental->Id_Conejo_Macho}}">
          </div>
          <div class="form-group" >
            <label>Status:</label>
            <select class="form-control" name="Status">
              <option> -- Seleccione motívo de baja -- </option>
                  <option> Desecho </option>
                  <option> Muerto </option>
            </select>
          </div>          
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Dar de baja</button>
</form>
      </div>
@endsection
