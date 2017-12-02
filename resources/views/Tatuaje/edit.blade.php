@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Tatuado de Conejos:</h2></center>
  <form action="{{url('/tatuaje/' . $conejo->Id_Conejo)}}" method="POST" role="form">
          {{csrf_field()}}
          {{method_field('patch')}} 
<div class="form-group" >
            {{-- <label>Fecha de baja:</label> --}}
            <input hidden class="form-control" type="date" name="Fecha_Muerte" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <div>
            <label>Jaula:</label>
            <select class="form-control" name="Id_Jaula">
              <option> -- Seleccione Jaula -- </option>
              @foreach($jaulas as $jaula)
                @if($jaula->Id_Jaula == $conejo->Id_Jaula)
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
            <input readonly class="form-control" type="text" name="Id_Conejo" value="{{$conejo->Id_Conejo}}">
          </div>
          <div class="form-group">
            <label for="">Género:</label>
            <select class="form-control" name="Genero">
            <option value="{{$conejo->Genero}}">{{$conejo->Genero}}</option>
            @if($conejo->Genero == 'Hembra')
              <option value="Macho">Macho</option>
            @else 
              <option value="Hembra">Hembra</option>
            @endif
            </select>
          </div>          
          <div class="form-group" >
            <label>Status:</label>
            <select class="form-control" name="Status">
              @if($conejo->Status == 'Vivo')
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
