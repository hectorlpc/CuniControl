@extends('layouts.Principal')
@section('content')
<div class="container">
  <form action="/my-handling-form-page" method="post">
      <div>
          <label for="parto">Numero de destete:</label>
          <select class="form-control" id="exampleFormControlSelect1">
    <option>destete 1</option>
    <option>destete 2</option>
    <option>destete 3</option>
    <option>destete 4</option>
    <option>destete 5</option>
  </select>
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

      <button type="submit" class="btn btn-primary">Actualizar</button>
      <button type="submit" class="btn btn-primary">Regresar</button>

  </form>
</div>
@endsection
