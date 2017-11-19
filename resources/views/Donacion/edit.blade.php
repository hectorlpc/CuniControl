@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizacion de Donacion de Gazapos</h2></center>
<form action="{{url('/donacion/' . $donacion->Id_Donacion)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
          <div class="form-group">
            <label for="  ">Coneja Donante:</label>
            <input readonly class="form-control" name="Id_Parto_Donante" value="{{substr($donacion->Id_Parto_Donante,0,10)}}">
          </div>
          <div class="form-group">
            <label for="">Parto Receptor:</label>
            <input readonly class="form-control" name="Id_Parto_Donatorio" value="{{substr($donacion->Id_Parto_Donatorio,0,10)}}">
          </div>
          <div class="form-group">
            <label for="">Cantidad de gazapos donados:</label>
            <select class="form-control" name="Donados">
              @for($i = 0; $i <= 10; $i++)
              @if($i == $donacion->Donados)
              <option value="{{str_pad($i, 2, "0", STR_PAD_LEFT)}}" selected>{{$i}}</option>
              @else
              <option value="{{str_pad($i, 2, "0", STR_PAD_LEFT)}}">{{$i}}</option>
              @endif
              @endfor
            </select>
          </div>
          <div>
            <label>Notas:</label>
            <input type="text" class="form-control" value="{{$donacion->Notas}}" name="Notas">
          </div>          
        </br>
          <DIV align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </form>
      </div>
@endsection
