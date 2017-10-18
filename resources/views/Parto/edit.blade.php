@extends('layouts.Principal')
@section('content')
<label for="destete">SUPERVISION DE PARTO</label>

    <div class="container">
    <form action="/my-handling-form-page" method="post">
        <div>
            <label for="parto">Numero de parto:</label>
            <select class="form-control" id="exampleFormControlSelect1">
      <option>parto 1</option>
      <option>parto 2</option>
      <option>parto 3</option>
      <option>parto 4</option>
      <option>parto 5</option>
    </select>
        </div>
        <div>
            <label for="num:gest">Numero de gestacion:</label>
            <input class="form-control" name="num_getsacion" type="text" >
        </div>

        <div>
            <label for="fecha">Fecha de parto:</label>
            <input class="form-control" name="fecha_destete" type="date" >
  </div>


        <div>
            <label for="cant_vivos">Cantidad de gazapos vivos:</label>
            <input class="form-control" name="vivos" type="text" >
        </div>

        <div>
            <label for="cant_muertos">Cantidad de gazapos muertos:</label>
            <input class="form-control" name="muertos" type="text" >
        </div>

        <div>
            <label for="peso">Peso promedio al nacer:</label>
            <input class="form-control" name="peso_destete" type="text" >
  </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Actualizar</button>
        <button type="submit" class="btn btn-outline-secondary">Regresar</button>

    </form>
  </div>
@endsection
