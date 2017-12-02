@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')

<div class="container">
  <center><h2>Supervisión de Parto</h2></center>
@if($montas->count() > 0)
<form action="{{url('/parto')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputPassword2">Número de tatuaje de la madre:</label>
        <select class="form-control" name="Id_Monta" id="parto">
            <option> -- Seleccione la coneja -- </option>
          @foreach($montas as $monta)
            <option value="{{$monta->Id_Monta}}">{{substr($monta->Id_Monta,0,5) . ' - ' . substr($monta->Id_Monta,5,5)}}</option>
          @endforeach
        </select>
    </div>
    <div>
      <label for="exampleInputPassword2">Fecha de Parto:</label>
      <input id="fechaDeParto" class="form-control" type="date" name="Fecha_Parto">
    </div>
    <br>
    <div>
        <label for="cant_vivos">Cantidad de gazapos vivos:</label>
            <select class="form-control" name="Numero_Vivos">
              @for($i = 0; $i <= 30; $i++)
                <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
    </div>
    <br>
    <div>
        <label for="cant_muertos">Cantidad de gazapos muertos:</label>
            <select class="form-control" name="Numero_Muertos">
              @for($i = 0; $i <= 30; $i++)
                <option value="{{$i}}">{{$i}}</option>
              @endfor              
            </select>
    </div>
    <br>
    <div>
        <label for="peso">Peso promedio al nacer:</label>
        <select class="form-control" name="Peso_Nacer">
           <option value="0.000">0.000</option>
           <option value="0.010">0.010</option>
           <option value="0.020">0.020</option>
           <option value="0.030">0.030</option>
           <option value="0.040">0.040</option>
           <option value="0.050">0.050</option>
           <option value="0.060">0.060</option>
           <option value="0.070">0.070</option>
           <option value="0.080">0.080</option>
           <option value="0.090">0.090</option>
           <option value="0.100">0.100</option>
        </select>
    </div>
    <br>
    <div align="right">
    <button type="submit" class="btn btn-outline-secondary">Regresar</button>
    <button type="submit" class="btn btn-outline-primary">Agregar</button>
    
    </div>
</form>
@else
<br>  
<center><h2>No Existen Montas Positivas</h2></center>
@endif
</div>
@endsection
