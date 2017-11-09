@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')

<div class="container">
  <center><h2>Registro de Destete</h2></center>
  <form action="{{url('/destete')}}" method="post">
    {{ csrf_field() }}
      <div>
          <label for="num:gest">Tatuaje de coneja:</label>
          <select class="form-control" name="Id_Parto" type="text" id="conejaParto">
            <option> -- Seleccione coneja -- </option>
          @foreach ($partos as $parto)
          @if($parto->Numero_Vivos > 0)
            <option value="{{$parto->Id_Parto}}">{{$parto->monta->Id_Conejo_Hembra}}</option>
          @endif
          @endforeach
          </select>
      </div>

      <div>
          <label for="fecha">Fecha de destete:</label>
          <input class="form-control" name="Fecha_Destete" type="date" >
        </div>
          <div class="form-group">
            <label for="">Cantidad de destetados:</label>
            <select class="form-control" name="Numero_Vivos" id="vivos">
            </select>
          </div>
          <div class="form-group">
            <label for="">Peso promedio de los destetados:</label>
            <select class="form-control" name="Peso_Nacer" id="pesoDestete">
            </select>
          </div>
      <br>
      <div align="right">
      <button type="submit" class="btn btn-outline-primary">Agregar</button>
      <button type="submit" class="btn btn-outline-secondary">Regresar</button></div>
  </form>
</div>
@endsection
