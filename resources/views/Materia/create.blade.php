@extends('layouts.Principal')
@section('content')

    <section class="contenedorPrincipal">


      <div class="container">
        <center><h2>Registro De Carreras:</h2></center>

    </br>
          <form action="{{url('/carrera')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label>Clave de la Carrera:</label>
            <input class="form-control" name="Id_Carrera">
          </div>
          <div class="form-group" >
            <label>Nombre de la Carrera:</label>
            <input class="form-control" name="Nombre_Carrera">
          </div>          
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>

    </section>

@endsection
