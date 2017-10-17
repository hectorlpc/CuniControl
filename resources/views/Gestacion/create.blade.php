@extends('layouts.Principal')
@section('content')
<div class="container">
    <form>
          <div class="form-group">
            <label for="">Numero Coneja</label>
            <select class="" name="TatuajeH">
              <option value="">Seleccione</option>
            </select>
          </div>
            <div class="form-group">
              <label for="">Fecha de diagnostico</label>
              <input type="date" class="form-control" id="" placeholder="Introduce la monta">
            </div>
          <div class="form-group">
            <label for="">Resulatdo Diagnostico</label>
            <select class="" name="TatuajeM">
              <option value="">Positivo</option>
              <option value="">Negativo</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Fecha Tentativa de Parto</label>
            <input type="date" name="" value="">
          </div>
          <button type="submit" class="btn btn-primary">Enviar Registro</button>
        </form>
</div>
@endsection
