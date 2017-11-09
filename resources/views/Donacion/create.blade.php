@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro de Donacion de Gazapos</h2></center>
          <form form action="{{url('/donacion')}}" method="POST">
            {{ csrf_field() }}
          <div class="form-group">
          <label for="exampleInputPassword2">Coneja Productora donante:</label>
          <select class="form-control" name="Id_Parto_Donante">
            @foreach ($partos as $parto)
              <option value="{{$parto->Id_Parto}}">{{$parto->monta->Id_Conejo_Hembra}}</option>
            @endforeach
          </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Coneja Productora receptora:</label>
          <select class="form-control" name="Id_Parto_Donatorio">
            @foreach ($partos as $parto)
              <option value="{{$parto->Id_Parto}}">{{$parto->monta->Id_Conejo_Hembra}}</option>
            @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Cantidad de gazapos donados:</label>
            <select class="form-control" name="Cantidad_Gazapos">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
            </select>
      </div>

        </br>
        <div align="right">
          <button type="submit" class="btn btn-outline-primary">Registrar</button>
          </div>
        </form>
      </div>
@endsection
