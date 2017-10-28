@extends('layouts.Principal')
@section('content')
   
    <div class="container">
      <form action="{{url('/adquisicion')}}" method="post">

            {{ csrf_field() }}
        <center><h2><label for="adquisicion">Agregar Tipo de Adquisición</label></h2></center>
<br>
          <div>
              <label for="nombre">Nombre de adquisicion:</label>
              <input class="form-control" name="Nombre_Adquisicion" type="text" >
          </div>
<br>
          <div>
              <label for="descripcion">Descripcion de adquisicion:</label>
              <input class="form-control" name="Descripcion_Adquisicion" type="text" >
    </div>

      <br>

          <div align="right"><button type="submit"  class="btn btn-outline-primary">Agregar</button>

      </form>
    </div>

@endsection