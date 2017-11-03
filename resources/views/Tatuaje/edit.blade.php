
@extends('layouts.Principal')
@section('content')

      <div class="container">
        <h2>TATUADO DE CONEJOS:</h2>
  <form action="{{url('/tatuaje/' . $conejo->Id_Conejo)}}" method="POST" role="form">
          {{csrf_field()}}
          {{method_field('patch')}}
          <div class="form-group">
            <label for="exampleInputPassword2">Tatuaje Derecho: </label>
            <input readonly class="form-control" name="Tatuaje_Derecho" value="{{$conejo->Tatuaje_Derecho}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Tatuaje Izquierdo: </label>
            <input readonly class="form-control" name="Tatuaje_Izquierdo" value="{{$conejo->Tatuaje_Izquierdo}}">
          </div>          
          <div>
            <label for="exampleInputPassword2">Fecha Nacimiento</label>
            <input readonly class="form-control" type="date" name="Fecha_Nacimiento" value="{{$conejo->Fecha_Nacimiento}}">
          </div>
          <br>          
          <div class="form-group">
            <label for="exampleInputPassword2">Genero:</label>
            <input class="form-control" name="Genero" value="{{$conejo->Genero}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Status:</label>
            <input class="form-control" name="Status" value="{{$conejo->Status}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Engorda (Si - No):</label>
            <input class="form-control" name="Engorda" value="{{$conejo->Engorda}}">
          </div>            
        </br>

          <button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </form>
      </div>
@endsection