@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizar Conejo de Engorda:</h2></center>
    </br>
<form action="{{url('/engorda/' . $engorda->Id_Conejo)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
<div class="form-group" >
            <label>Fecha de baja:</label>
            <input class="form-control" type="date" name="Fecha_Muerte" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <div>
            <label>Jaula:</label>
            <select class="form-control" name="Id_Jaula">
              <option> -- Seleccione Jaula -- </option>
              @foreach($jaulas as $jaula)
                @if($jaula->Id_Jaula == $engorda->Id_Jaula)
                  <option value="{{$jaula->Id_Jaula}}" selected>{{$jaula->Id_Jaula}}</option>
                @else
                  <option value="{{$jaula->Id_Jaula}}">{{$jaula->Id_Jaula}}</option>
                @endif
              @endforeach
            </select>
          </div>
          <br>
          <div class="form-group" >
            <label>Tatuajes del conejo de engorda:</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Engorda" value="{{$engorda->Id_Conejo}}">
          </div>
          <div class="form-group" >
            <label>Status:</label>
            <select class="form-control" name="Status">
              @if($engorda->Status == 'Vivo')
                  <option value="Vivo">Vivo</option>
                  <option value="Muerto"> Muerto </option>
              @else
                  <option value="Muerto"> Muerto </option>
                  <option value="Vivo">Vivo</option>
              @endif 
            </select>
          </div>          
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>
</form>
      </div>
@endsection
