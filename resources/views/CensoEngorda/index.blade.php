@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <h2>Censo general vivos</h2>
          <form method="get" action="{{url('engorda/pdf')}}">

          <br>
          <div>
            <label>Ingrese fecha inicial</label>
            <input class="form-control" type="date" name="Fecha_Inicio" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <br>
          <div>
            <label>Ingrese fecha final</label>
            <input class="form-control" type="date" name="Fecha_Fin" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <br>
          <button type="submit" class="btn btn-outline-success">Imprimir</button>
        </form>
</div>
@endsection
