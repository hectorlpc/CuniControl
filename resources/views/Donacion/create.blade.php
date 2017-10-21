@extends('layouts.Principal')
@section('content')
      <div class="container">
        <h2>REGISTRO DE DONACIÓN DE GAZAPOS:</h2>
          <form form action="{{url('/donacion')}}" method="POST">
            {{ csrf_field() }}
          <div class="form-group">
          <label for="exampleInputPassword2">Parto Donante:</label>
          <select class="form-control" name="Id_Parto_Donante">
            @foreach ($partos as $parto)
              <option value="{{$parto->Id_Parto}}">{{$parto->Id_Parto}}</option>
            @endforeach
          </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Parto Receptor:</label>
          <select class="form-control" name="Id_Parto_Donatorio">
            @foreach ($partos as $parto)
              <option value="{{$parto->Id_Parto}}">{{$parto->Id_Parto}}</option>
            @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Cantidad de gazapos donados:</label>
            <input type="number" name="Cantidad_Gazapos" min="1" max="20">
      </div>
         
        </br>

          <button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection
