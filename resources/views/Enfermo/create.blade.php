@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  <center><h2>Registro de Conejo Enfermo</h2></center>
</br>
</br>
  <form action="{{url('/enfermo')}}" method="POST" role="form">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Tatuajes del conejo (Derecho - Izquierdo):</label>
        <select name="Id_Conejo" id="input" class="form-control">
            <option> -- Seleccione los tatuajes del conejo -- </option>
            @foreach ($conejos as $conejo)
                <option value="{{$conejo->Id_Conejo}}">{{substr($conejo->Id_Conejo,0,5) . " - " . substr($conejo->Id_Conejo,5,11)}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="">Enfermedad diagnosticada:</label>
        <select name="Id_Enfermedad" id="input" class="form-control">
            <option> -- Seleccione la enfermedad -- </option>
            @foreach ($enfermedades as $enfermedad)
                <option value="{{$enfermedad->Id_Enfermedad}}">{{$enfermedad->Nombre_Enfermedad}}</option>
            @endforeach
        </select>
      </div>
       <div class="form-group">
        <label for="">Medicamento suministrado:</label>
        <select name="Id_Medicamento" id="input" class="form-control">
            <option> -- Seleccione el medicamento -- </option>
            @foreach ($medicamentos as $medicamento)
                <option value="{{$medicamento->Id_Medicamento}}">{{$medicamento->Nombre_Medicamento}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for=""> Fecha de inicio del tratamiento</label>
        <input name="Fecha_Inicio" class="form-control" type="date" value="{{$fecha = date('Y-m-d')}}">
      </div>
      <div class="form-group">
        <label for=""> Fecha de fin del tratamiento</label>
        <input name="Fecha_Fin" class="form-control" type="date" value="{{$fecha = date('Y-m-d')}}">
      </div>
    </br>
    <div align="right">
      <button class="btn btn-outline-primary" type="submit" >Registrar</button>
      <a class="btn btn-outline-secondary" href="{{url('/enfermo/')}}">Regresar</a>
      </div>
  </form>
</div>
@endsection
