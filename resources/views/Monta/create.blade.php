@extends('layouts.Principal')
@section('content')
<div class="container">
          <form>
          <div class="form-group">
            <label for="">Fecha de Monta</label>
            <input type="date" class="form-control" id="" placeholder="Introduce la monta">

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

          <button type="submit" class="btn btn-primary">Enviar Registro</button>
        </form>
</div>
@endsection
