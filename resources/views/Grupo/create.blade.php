@extends('layouts.Principal')
@section('content')

    <section class="contenedorPrincipal">


      <div class="container">
        <center><h2>Registro De Grupos:</h2></center>

    </br>
          <form action="{{url('/grupo')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label>Clave del grupo:</label>
            <input class="form-control" name="Id_Grupo">
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
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>

    </section>

@endsection
