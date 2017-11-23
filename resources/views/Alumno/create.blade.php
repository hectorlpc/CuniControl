@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Registro de Datos del Alumno</h2>
        <form action="{{url('/alumno')}}" method="post">
            <div>
              <label>CURP Alumno:</label>
              <input readonly type="text" class="form-control" name="CURP_Alumno" value= {{Auth::user()->CURP}} >
            </div>
            <div>
              <label>Número Seguro Axxa:</label>
              <input type="text" class="form-control" name="Seguro_Axxa"  >
            </div>
            <div>
              <label>Número Seguro Facultativo</label>
              <input class="form-control" name="Seguro_Facultativo" type="text" >
            </div>
            <div>
              <label>Número de Cuenta</label>
              <input class="form-control" name="Numero_Cuenta" type="text" >
            </div>
            <div class="form-group" >
            <label for="">Carrera:</label>
           <select class="form-control" name="Id_Carrera">
              <option> -- Seleccione la carrera -- </option>
              @foreach ($carreras as $carrera)
                  <option value="{{$carrera->Id_Carrera}}">{{$carrera->Nombre_Carrera}}</option>
              @endforeach
            </select>
          </div>
            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Agregar</button>

            </div>
        </form>
      </div>
@endsection
