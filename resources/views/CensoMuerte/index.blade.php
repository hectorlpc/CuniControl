@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <h2>Censo general muertos</h2>
          <form method="get" action="{{url('engorda/')}}">

          <br>
          <div>
            <label>Ingrese fecha inicial</label>
            <input class="form-control" type="date" name="Fecha_Inicio" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <br>
          <div>
            <label>Ingrese fecha final</label>
            <input class="form-control" type="date" name="Fecha_Inicio" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <br>
          <a href="{{url('/baja/pdf')}}" type="submit" class="btn btn-outline-success">Buscar</a>          
        </form>
        <br>
        <a href="{{url('/baja/pdf')}}" type="submit" class="btn btn-outline-success">Imprimir</a>
</div>
@endsection
