@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Tatuado de Conejos:</h2></center>
  <form action="{{url('/tatuaje/' . $conejo->Id_Conejo)}}" method="POST" role="form">
          {{csrf_field()}}
          {{method_field('patch')}}
          <div class="form-group">
            <label for="">Tatuaje Derecho: </label>
            <input readonly class="form-control" name="Tatuaje_Derecho" value="{{$conejo->Tatuaje_Derecho}}">
          </div>
          <div class="form-group">
            <label for="">Tatuaje Izquierdo: </label>
            <input readonly class="form-control" name="Tatuaje_Izquierdo" value="{{$conejo->Tatuaje_Izquierdo}}">
          </div>
          <div>
            <label for="">Fecha Nacimiento</label>
            <input readonly class="form-control" type="date" name="Fecha_Nacimiento" value="{{$conejo->Fecha_Nacimiento}}">
          </div>
          <br>
          <div class="form-group">
            <label for="">Genero:</label>
            <select class="form-control" name="Genero">
            <option value="{{$conejo->Genero}}">{{$conejo->Genero}}</option>
            @if($conejo->Genero == 'Hembra')
              <option value="Macho">Macho</option>
            @else 
              <option value="Hembra">Hembra</option>
            @endif
            </select>
          </div>
{{--           <div class="form-group">
            <label for="">Status:</label>
            <select class="form-control" name="Status">
            <option value="{{$conejo->Status}}">{{$conejo->Status}}</option>
            @if($conejo->Status == 'Vivo')
              <option value="Muerto">Muerto</option>
            @else 
              <option value="Vivo">vivo</option>
            @endif
            </select>
          </div> --}}
          <br>
          <div class="form-group">
          <button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </form>
      </div>
@endsection
