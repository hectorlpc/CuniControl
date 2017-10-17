@extends('layouts.Principal')
@section('content')
<div class="container">
          <form>
          <div class="form-group">
            <label for="">Fecha de diagnostico</label>
            <input type="date" class="form-control" id="" placeholder="Introduce la monta" readonly="readonly">

          </div>
          <div class="form-group">
            <label for="">Numero Coneja</label>
            <input type="date" class="form-control" id="" placeholder="Introduce la monta" readonly="readonly">
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
          <button type="submit" class="btn btn-primary">Actualizar Registro</button>
        </form>
</div>
@endsection
