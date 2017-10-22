  @extends('layouts.Principal')
@section('content')
<div class="container">
  <h2>Registro de Conejo Enfermo</h2>
</br>
</br>
  <form action="{{url('/enfermo')}}" method="POST" role="form">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="exampleInputPassword">Tatuajes del conejo (Derecho - Izquierdo):</label>
        <select name="Id_Conejo" id="input" class="form-control">
            <option> -- Seleccione los tatuajes del conejo -- </option>          
            @foreach ($conejos as $conejo)
                <option value="{{$conejo->Id_Conejo}}">{{$conejo->Tatuaje_Derecho . " - " . $conejo->Tatuaje_Izquierdo}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword">Enfermedad diagnosticada:</label>
        <select name="Id_Enfermedad" id="input" class="form-control">
            <option> -- Seleccione la enfermedad -- </option>        
            @foreach ($enfermedades as $enfermedad)
                <option value="{{$enfermedad->Id_Enfermedad}}">{{$enfermedad->Nombre_Enfermedad}}</option>
            @endforeach
        </select>      
      </div>
       <div class="form-group">
        <label for="exampleInputPassword">Medicamento suministrado:</label>
        <select name="Id_Medicamento" id="input" class="form-control">
            <option> -- Seleccione el medicamento -- </option>
            @foreach ($medicamentos as $medicamento)
                <option value="{{$medicamento->Id_Medicamento}}">{{$medicamento->Nombre_Medicamento}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> Fecha de inicio del tratamiento</label>
        <input class="form-control" type="date" name="Fecha_Inicio" min="2000-01-01" max="2050-01-01" step="2">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> Fecha de fin del tratamiento</label>
        <input class="form-control" type="date" name="Fecha_Fin" min="2000-01-01" max="2050-01-01" step="2">
      </div>
    </br>
      <button type="submit" class="btn btn-out-line-primary">Registrar</button>        
  </form>
  <a href="{{url('/enfermo/')}}">Regresar</a>
</div>
@endsection
