@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Actualizacion Datos Alumno</h2>
        <form action="{{url('/alumno/'.$alumno->CURP_Alumno)}}" method="POST" role="form">
           {{method_field('patch')}}
  {{csrf_field()}}
            <div>
              <label>CURP Alumno:</label>
              <input readonly type="text" class="form-control" name="CURP_Alumno" value= {{Auth::user()->CURP}} >
            </div>
            <div>
              <label>Numero Seguro Axxa:</label>
              <input type="text" class="form-control" name="Seguro_Axxa" value={{$alumno->Seguro_Axxa}}  >
            </div>
            <div>
              <label>Numero Seguro Facultativo</label>
              <input class="form-control" name="Seguro_Facultativo" type="text"  value= {{$alumno->Seguro_Facultativo}}>
            </div>
            <div>
              <label>Numero de Cuenta</label>
              <input class="form-control" name="Numero_Cuenta" type="text" value={{$alumno->Numero_Cuenta}}>
            </div>
            <div class="form-group" >
            <label for="">Carrera:</label>
           <select class="form-control" name="Id_Carrera">
              <option> -- Seleccione la carrera -- </option>
              @foreach ($carreras as $carrera)
                  
                  @if($carrera->Id_Carrera == $alumno->Id_Carrera)
                    <option value="{{$carrera->Id_Carrera}}" selected>{{$carrera->Nombre_Carrera}}</option>
                  @else
                    <option value="{{$carrera->Id_Carrera}}">{{$carrera->Nombre_Carrera}}</option>
                  @endif

              @endforeach
            </select>
          </div>

            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
            </div>
        </form>
      </div>
@endsection
