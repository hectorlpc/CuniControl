@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro de Donacion de Gazapos</h2></center>
          <form form action="{{url('/donacion')}}" method="POST">
            {{ csrf_field() }}
          <div>
            <label>Fecha de donación</label>
            <input class="form-control" name="Fecha" type="date" value="{{$fecha_actual = date('Y-m-d')}}">
          </div>  
          <br>
          <div class="form-group">
          <label >Coneja Productora donante:</label>
          <select class="form-control" name="Id_Parto_Donante" id="donador">
            <option> -- Seleccione parto -- </option>
            @foreach ($partos as $parto)
            @if($parto->Activado == 0)
              <option value="{{$parto->Id_Parto}}">{{$parto->monta->Id_Conejo_Hembra}}</option>
            @endif
            @endforeach
          </select>
          </div>
          <div class="form-group">
            <label for="">Coneja Productora Receptora:</label>
            <select class="form-control" name="Id_Parto_Donatorio" id="receptor">
            </select>
          </div>          
          <div class="form-group">
            <label for="exampleInputPassword2">Cantidad de gazapos donados:</label>
            <select class="form-control" name="Donados">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
            </select>
          </div>
          <label>Notas:</label>
          <input type="text" class="form-control" name="Notas">

        </br>
        <div align="right">
          <button type="submit" class="btn btn-outline-primary">Registrar</button>
          </div>
        </form>
      </div>
@endsection
