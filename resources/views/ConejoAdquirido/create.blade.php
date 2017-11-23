@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Conejo Adquirido:</h2></center>
    </br>
    <br>
          <form action="{{url('/adquirido')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="Conejo_Adquirido">Número de tatuaje derecho:</label>
            <input class="form-control" onkeypress="return solonumeros(event)" name="Tatuaje_Derecho" type="text" >
          </div>
          <div class="form-group">
            <label for="Conejo_Adquirido">Número de tatuaje izquierdo:</label>
            <input class="form-control" onkeypress="return solonumeros(event)" name="Tatuaje_Izquierdo" type="text" >
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
            <label for="exampleInputPassword2">Género:</label>
            <input type="radio" name="Genero" value="Macho" /> Macho
            <input type="radio" name="Genero" value="Hembra" /> Hembra
          </div>
          <div class="form-group">
            <label for="Conejo_Adquirido">Fecha de adquisición:</label>
            <input class="form-control" type="date" name="Fecha_Adquisicion" value="{{$fecha = date('Y-m-d')}}">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>

@endsection
@section('Scrips')
<script src="{{ asset('js/SoloNumeros.js') }}"></script>
<script src="{{ asset('js/SoloLetras.js') }}"></script>
@endsection
