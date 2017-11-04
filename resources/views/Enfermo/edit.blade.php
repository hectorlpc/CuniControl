@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
  <h2>Editar de Conejo Enfermo</h2>
</br>
</br>
  <form action="{{url('/enfermo/' . $enfermo->Id_Conejo)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
      <div class="form-group">
        <label for="exampleInputPassword">Tatuajes del conejo (Derecho - Izquierdo):</label>
        <input readonly class="form-control" type="text" name="Id_Conejo" value="{{$enfermo->Id_Conejo}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword">Enfermedad diagnosticada:</label>
        <select name="Id_Enfermedad" id="input" class="form-control">
            <option> -- Seleccione la enfermedad -- </option>
            @foreach ($enfermedades as $enfermedad)
            @if($enfermedad->Id_Enfermedad == $tratamiento->Id_Enfermedad)
                <option value="{{$enfermedad->Id_Enfermedad}}" selected>{{$enfermedad->Nombre_Enfermedad}}</option>
            @else
                <option value="{{$enfermedad->Id_Enfermedad}}">{{$enfermedad->Nombre_Enfermedad}}</option>
            @endif
            @endforeach
        </select>
      </div>
       <div class="form-group">
        <label for="exampleInputPassword">Medicamento suministrado:</label>
        <select name="Id_Medicamento" id="input" class="form-control">
            <option> -- Seleccione el medicamento -- </option>
            @foreach ($medicamentos as $medicamento)
            @if($medicamento->Id_Medicamento == $tratamiento->Id_Medicamento)
                <option value="{{$medicamento->Id_Medicamento}}" selected>{{$medicamento->Nombre_Medicamento}}</option>
            @else
                <option value="{{$medicamento->Id_Medicamento}}">{{$medicamento->Nombre_Medicamento}}</option>
            @endif
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> Fecha de inicio del tratamiento</label>
        <input readonly value="{{$enfermo->Fecha_Inicio}}" class="form-control" type="date" name="Fecha_Inicio" min="2000-01-01" max="2050-01-01" step="1">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> Fecha de fin del tratamiento</label>
        <input value="{{$enfermo->Fecha_Fin}}" class="form-control" type="date" name="Fecha_Fin" min="2000-01-01" max="2050-01-01" step="1">
      </div>
    </br>
      <button type="submit" class="btn btn-out-line-primary">Actualizar</button>
  </form>
  <a href="{{url('/enfermo/')}}">Regresar</a>
</div>
@endsection
