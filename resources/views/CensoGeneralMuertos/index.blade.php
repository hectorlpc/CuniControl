@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <center><h1>Censo General De Decesos</h1></center>
          <form method="get" action="{{url('censo-general-muertos/pdf')}}">

          <br>
          <div>
            <label>Ingrese Fecha Inicial</label>
            <input class="form-control" type="date" name="Fecha_Inicio" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <br>
          <div>
            <label>Ingrese Fecha Final</label>
            <input class="form-control" type="date" name="Fecha_Fin" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <br>
         <div align="right"> <button type="submit" class="btn btn-outline-success">Imprimir</button>
        </form>
</div>
@endsection
