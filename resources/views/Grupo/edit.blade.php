@extends('layouts.Principal')
@section('content')

    <section class="contenedorPrincipal">


      <div class="container">
        <center><h2>Actualizar Carreras:</h2></center>

    </br>
<form action="{{url('/carrera/' . $carrera->Id_Carrera)}}" method="POST" role="form">
  {{method_field('patch')}}
  {{csrf_field()}}
          <div class="form-group" >
            <label>Clave de la Carrera:</label>
            <input readonly class="form-control" name="Id_Carrera" value="{{$carrera->Id_Carrera}}">
          </div>
          <div class="form-group" >
            <label>Nombre de la Carrera:</label>
            <input value="{{$carrera->Nombre_Carrera}}" class="form-control" name="Nombre_Carrera">
          </div>          
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>

    </section>

@endsection
