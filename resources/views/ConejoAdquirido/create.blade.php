@extends('layouts.Principal')
@section('content')

      <div class="container">
        <center><h2>Registro De Conejo Adquirido:</h2></center>
    </br>
          <form action="{{url('/adquirido')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="Conejo_Adquirido">Número de tatuaje derecho:</label>
            <input class="form-control" name="Tatuaje_Derecho" type="text" >
          </div>
          <div class="form-group">
            <label for="Conejo_Adquirido">Número de tatuaje izquierdo:</label>
            <input class="form-control" name="Tatuaje_Izquierdo" type="text" >
          </div>

          <div class="form-group">
            <label for="Conejo_Adquirido">Raza del Conejo:</label>
            <select class="form-control" name="Id_Raza">
             @foreach($razas as $raza)
                  <option value="{{$raza->Id_Raza}}">{{$raza->Nombre_Raza}}</option>
              @endforeach
            </select>
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
            <label for="exampleInputPassword2">Genero:</label>
            <input type="radio" name="Genero" value="Macho" /> Macho
            <input type="radio" name="Genero" value="Hembra" /> Hembra
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Status:</label>
            <input type="radio" name="Status" value="Vivo" /> Vivo
            <input type="radio" name="Status" value="Muerto" /> Muerto
          </div>
          
          <div class="form-group">
            <label for="Conejo_Adquirido">Fecha de adquisición:</label>
            <input class="form-control" type="date" name="Fecha_Adquisicion" min="2016-01-01" max="2050-01-01" step="1">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>

@endsection
