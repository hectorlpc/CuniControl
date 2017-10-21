@extends('layouts.Principal')
@section('content')
<div class="container">
          <form>
            <h2>Modificar Registro Montas</h2>
          <div class="form-group">
            <label for="">Fecha de Monta</label>
            <input type="date" class="form-control" name="Fecha_Monta">
          </div>
          <div class="form-group">
            <label for="">Tatuaje Macho</label>
            <select class="" name="TatuajeM">
              <option value="">Seleccione</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Tatuaje Hembra</label>
            <select class="" name="TatuajeH">
              <option value="">Seleccione</option>
            </select>
          </div>
          <button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </form>
</div>
@endsection
