@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Registro Datos Alumno</h2>
        <form action="{{url('/alumno')}}" method="post">
            <div>
              <label>CURP Alumno:</label>
              <input readonly type="text" class="form-control" name="CURP_Alumno" value= {{Auth::user()->CURP}} >
            </div>
            <div>
              <label>Numero Seguro Axxa:</label>
              <input type="text" class="form-control" name="Seguro_Axxa"  >
            </div>
            <div>
              <label>Numero Seguro Facultativo</label>
              <input class="form-control" name="Seguro_Facultativo" type="text" >
            </div>
            <div>
              <label>Numero de Cuenta</label>
              <input class="form-control" name="Numero_Cuenta" type="text" >
            </div>
            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Agregar</button>

            </div>
        </form>
      </div>
@endsection
