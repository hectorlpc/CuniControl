@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Registro Datos del Profesor</h2>
        <form action="" method="post">
            <div>
              <label >Numero UNAM:</label>
              <input type="text" class="form-control" name="numunam-mod"  >
            </div>
            <div>
              <label >Seguridad Social:</label>
              <input type="text" class="form-control" name="segsoc-mod"  >
            </div>
            <div>
              <label >RFC:</label>
              <input class="form-control" name="rfc-mod" type="text" >
            </div>
            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Agregar</button>
            </div>
        </form>
      </div>
@endsection
