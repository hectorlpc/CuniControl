@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Registro Datos Alumno</h2>
        <form action="" method="post">
            <div>
              <label>Numero Seguro Axxa:</label>
              <input type="text" class="form-control" name="numaxxa"  >
            </div>
            <div>
              <label>Numero Seguro Facultativo</label>
              <input class="form-control" name="numseg" type="text" >
            </div>
            <div>
              <label>Numero de Cuenta</label>
              <input class="form-control" name="numcta" type="text" >
            </div>
            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Agregar</button>
            </div>
        </form>
      </div>
@endsection
