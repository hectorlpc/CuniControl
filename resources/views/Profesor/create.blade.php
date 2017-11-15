@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Registro Datos del Profesor</h2>
        <form action="{{url('/profesor')}}" method="post">
            <div>
              <label>CURP Profesor:</label>
              <input readonly type="text" class="form-control" name="CURP_Profesor" value= {{Auth::user()->CURP}} >
            </div>
            <div>
              <label >Numero UNAM:</label>
              <input type="text" class="form-control" name="Numero_unam"  >
            </div>
            <div>
              <label >Seguridad Social:</label>
              <input type="text" class="form-control" name="Seguro_social"  >
            </div>
            <div>
              <label >RFC:</label>
              <input class="form-control" name="RFC" type="text" >
            </div>
            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Agregar</button>
            </div>
        </form>
      </div>
@endsection
