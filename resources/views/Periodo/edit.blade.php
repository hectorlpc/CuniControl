@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizar Grupo:</h2></center>
    </br>
<form action="{{url('/periodo/' . $periodo->Id_Periodo)}}" method="POST" role="form">
  {{method_field('patch')}}
  {{csrf_field()}}
          <div class="form-group" >
            <label>Periodo:</label>
            <input class="form-control" value="{{$periodo->Id_Periodo}}" name="Id_Periodo">
          </div>
          <div class="form-group">
      <label for="exampleInputEmail1">Fecha de Inicio del Periodo:</label>
      <input class="form-control" type="date" value="{{$periodo->Fecha_Inicio}}" name="Fecha_Inicio">
    </div><div class="form-group">
      <label for="exampleInputEmail1">Fecha de Término del Periodo</label>

      <input class="form-control" type="date" value="{{$periodo->Fecha_Termino}}"  name="Fecha_Termino">
    </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>
@endsection
