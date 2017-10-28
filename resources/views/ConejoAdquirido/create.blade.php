@extends('layouts.Principal')
@section('content')

      <div class="container">
        <center><h2>Registro De Conejo Adquirido:</h2></center>
    </br>
          <form action="{{url('/adquirido')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="Conejo_Adquirido">Número de tatuaje derecho:</label>
            <select class="form-control" name="Id_Conejo">
            <option>9826152</option>
            <option>9761521</option>
            <option>3751836</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Conejo_Adquirido">Número de tatuaje izquierdo:</label>
            <select class="form-control" name="Id_Conejo">
            <option>0182612</option>
            <option>0836241</option>
            <option>0252123</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Conejo_Adquirido">Tipo de aquisición:</label>
            <select class="form-control" name="Id_Adquisicion">
            <option>Donación</option>
            <option>Compra</option>
            <option>Producción</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Conejo_Adquirido">Fecha de adquisición:</label>
            <input class="form-control" type="date" name="Fecha_Adquisicion" min="2016-01-01" max="2050-01-01" step="2">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>

@endsection
