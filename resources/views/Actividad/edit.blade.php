@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <h2 align="center">Actualizacion de Actividad</h2>
        <form action="" method="post">
            <div>
              <label >Nombre de Actividad:</label>
              <input type="text" class="form-control" name="nomActividad-mod"  >
            </div>
            <div>
              <label >Descripcion de Actividad:</label>
              <input class="form-control" name="descActividad-mod" type="text" >
            </div>
            <br>
            <div align="right">
            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
            </div>
        </form>
      </div>
@endsection
