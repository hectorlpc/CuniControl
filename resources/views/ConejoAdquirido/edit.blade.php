@extends('layouts.Principal')
@section('content')

      <div class="container">
        <center><h2>Actualizar Registro De Conejo Adquirido:</h2></center>
    </br>
          <form action="{{url('/adquirido/' . $conejoAdquirido->Id_Adquirido)}}" method="POST" role="form">
            {{method_field('patch')}}
            {{ csrf_field() }}
          <div class="form-group">
            <label for="Conejo_Adquirido">Identificador de Conejo Adquirido:</label>
            <input  readonly value="{{$conejoAdquirido->Id_Conejo}}" class="form-control" name="Tatuaje_Derecho" type="text">
          </div>
          <div class="form-group">
            <label for="Conejo_Adquirido">Tipo de aquisición:</label>
            <select class="form-control" name="Id_Adquisicion">
             @foreach($adquisiciones as $adquisicion)
                  <option value="{{$adquisicion->Id_Adquisicion}}">{{$adquisicion->Nombre_Adquisicion}}</option>
              @endforeach
            </select>
          </div>
          
          <div class="form-group">
            <label for="Conejo_Adquirido">Fecha de adquisición:</label>
            <input value="{{$conejoAdquirido->Fecha_Adquisicion}}" class="form-control" type="date" name="Fecha_Adquisicion" min="2016-01-01" max="2050-01-01" step="1">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>

        </form>
      </div>
@endsection