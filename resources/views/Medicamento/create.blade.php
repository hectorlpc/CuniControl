@extends('layouts.Principal')
@section('content')
      <div class="container">
        <center><h2>Registro De Medicamentos:</h2></center>
    </br>
          <form action="{{url('/medicamento')}}" method="post">

          <div class="form-group">
            <label for="Medicamento">Nombre del medicamento:</label>
            <input class="form-control" type="text" name="Nombre_Medicamento">
          </div>
          <div class="form-group">
            <label for="Medicamento">Unidades existentes del medicamento:</label>
            <input type="number" min="0" max="5000" name="Cantidad">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>

@endsection
