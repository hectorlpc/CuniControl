@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Periodos</h2></center>

    </br>
          <form action="{{url('/periodo')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label>Periodo:</label>
            <input class="form-control" placeholder="2017-1" name="Id_Periodo">
          </div>
          <div class="form-group">
      <label for="exampleInputEmail1">Fecha de Inicio del Periodo:</label>
      <input class="form-control" type="date" name="Fecha_Inicio">
    </div><div class="form-group">
      <label for="exampleInputEmail1">Fecha de Término del Periodo</label>

      <input class="form-control" type="date" name="Fecha_Termino">
    </div>
          
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>
@endsection
