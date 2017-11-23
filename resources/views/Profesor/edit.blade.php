@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Actualizacion Datos del Profesor</h2>
        <form action="{{url('profesor/' . $profesor->CURP_Profesor)}}" method="POST" role="form">
       {{method_field('patch')}}
        {{csrf_field()}}
            <div>
              <label>CURP Profesor:</label>
              <input readonly type="text" class="form-control" name="CURP_Profesor" value= {{Auth::user()->CURP}} >
            </div>
            <div>
              <label >Número UNAM:</label>
              <input type="text" class="form-control" name="Numero_unam"  value= {{$profesor->Numero_unam}}>
            </div>
            <div>
              <label >Seguridad Social:</label>
              <input type="text" class="form-control" name="Seguro_social" value= {{$profesor->Seguro_social}} >
            </div>
            <div>
              <label >RFC:</label>
              <input class="form-control" name="RFC" type="text" value= {{$profesor->RFC}}>
            </div>
            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
            </div>
        </form>
      </div>
@endsection
