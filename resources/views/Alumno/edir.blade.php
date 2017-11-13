@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Actualizacion Datos Alumno</h2>
        <form action="" method="post">
            <div>
              <label>Numero Seguro Axxa:</label>
              <input type="text" class="form-control" name="numaxxa-mod"  >
            </div>
            <div>
              <label>Numero Seguro Facultativo</label>
              <input class="form-control" name="numseg-mod" type="text" >
            </div>
            <div>
              <label>Numero de Cuenta</label>
              <input class="form-control" name="numcta-mod" type="text" >
            </div>
            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Agregar</button>
            </div>
        </form>
      </div>
@endsection
