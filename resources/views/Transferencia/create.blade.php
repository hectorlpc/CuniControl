@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Baja por transferencias:</h2></center>
    </br>
  <form action="{{url('/transferencia')}}" method="post">
  {{ csrf_field() }}
    <div class="form-group">
      <label>Fecha de baja:</label>
      <input value="{{$fecha_actual = date('Y-m-d')}}" type="date" class="form-control" name="Fecha_Baja">
    </div>  
    <div class="form-group">
      <label for="Conejo_Adquirido">Tatuajes de conejo:</label>
        <select class="form-control" name="Id_Conejo">
          @foreach($conejos as $conejo)
           <option>{{$conejo->Id_Conejo}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
      <label for="Conejo_Adquirido">Area de baja:</label>
        <select class="form-control" name="Id_Area">
          @foreach($areas as $area)
          <option value="{{$area->Id_Area}}"> {{$area->Nombre_Area}} </option>
          @endforeach
        </select>
    </div>
    <br>
    <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
    </form>
</div>
@endsection
