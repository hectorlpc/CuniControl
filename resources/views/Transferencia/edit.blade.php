@extends('layouts.Principal')
@section('content')

      <div class="container">
        <center><h2>Registro De Baja por transferencias:</h2></center>
    </br>
  <form action="{{url('/transferencia/' . $transferencia->Id_Transferencia)}}" method="post">
      {{method_field('patch')}}
      {{ csrf_field() }}
    <div class="form-group">
      <label for="Conejo_Adquirido">Tatuajes de conejo:</label>
           <input readonly class="form-control" value="{{$transferencia->Id_Conejo}}" name="Id_Conejo">
    </div>
    <div class="form-group">
      <label for="Conejo_Adquirido">Fecha de baja:</label>
            <input readonly type="date" class="form-control" value="{{$transferencia->Fecha_Baja}}" name="Fecha_Baja">
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
    <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar </button>
    </form>
</div>
@endsection
