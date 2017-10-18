@extends('layouts.Principal')
@section('content')
<label for="destete">REGISTRO DESTETE</label>
<div class="container">
  <form action="/my-handling-form-page" method="post">
      <div>
          <label for="parto">Numero de destete:</label>
          <input class="form-control" name="parto" type="text" >
      </div>
      <div>
          <label for="num:gest">Numero de parto:</label>
          <input class="form-control" name="num_getsacion" type="text" >
      </div>

      <div>
          <label for="fecha">Fecha de destete:</label>
          <input class="form-control" name="fecha_destete" type="date" >
        </div>
      <div>
          <label for="cant_vivos">Cantidad de destetados:</label>
          <input class="form-control" name="vivos" type="text" >
      </div>

      <div>
          <label for="peso">Peso promedio de los destetados:</label>
          <input class="form-control" name="peso_destete" type="text" >
</div>
      <br>
      <button type="submit" class="btn btn-outline-primary">Agregar</button>
      <button type="submit" class="btn btn-outline-secondary">Regresar</button>

  </form>
</div>
@endsection
