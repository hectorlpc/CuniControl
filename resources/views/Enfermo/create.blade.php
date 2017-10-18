@extends('layouts.Principal')
@section('content')
<div class="container">
  <h2>Registro de Conejo Enfermo</h2>
</br>
</br>
    <form>
    <div class="form-group">
      <label for="exampleInputPassword2">Tatuaje del conejo:</label>
    <select class="form-control" name="Tatuajes">
      <option>123436</option>
      <option>9823</option>
      <option>98373</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword2">Enfermedad diagnosticada:</label>
    <select class="form-control" name="Tatuajes">
      <option>Mastitis</option>
      <option>Sarna</option>
      <option>Diarrea</option>
      </select>
    </div>
     <div class="form-group">
      <label for="exampleInputPassword2">Medicamento suministrado:</label>
    <select class="form-control" name="Tatuajes">
      <option>Paracetamol</option>
      <option>Solucion salina</option>
      <option>etc...</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"> Fecha de inicio del tratamiento</label>
      <input class="form-control" type="date" name="fecha" min="2000-01-01" max="2050-01-01" step="2">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"> Fecha de fin del tratamiento</label>
      <input class="form-control" type="date" name="fecha" min="2000-01-01" max="2050-01-01" step="2">
    </div>
  </br>

    <button type="submit" class="btn btn-outline-primary">Registrar</button>
  </form>
</div>
@endsection
