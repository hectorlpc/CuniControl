@extends('layouts.Principal')
@section('content')
  
    <div class="container">
<form action="{{url('/adquisicion/' . $adquisicion->Id_Adquisicion)}}" method="POST" role="form">
      <form action="/my-handling-form-page" method="post">
      {{method_field('patch')}}
      {{ csrf_field() }}
      <center><h2><label for="Adquisicion">Modificar Tipo de Adquisición</label></h2></center>

          <div>
              <label for="id_adquisicion">Codigo de Adquisición:</label>
              <select class="form-control" id="exampleFormControlSelect1">
        <option>adquisición 1</option>
        <option>adquisición 2</option>
        <option>adquisición 3</option>
        <option>adquisición 4</option>
        <option>adquisición 5</option>
      </select>
          </div>
<br>
          <div>
              <label for="nombre">Nombre de adquisición:</label>
              <input class="form-control" name="Nombre_Adquisicion" type="text" >
          </div>
<br>

<div>
    <label for="descripcion">Descripcion de adquisición:</label>
    <input class="form-control" name="Descripcion_Adquisición" type="text" >
</div>

<br>

    <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>
      </form>
    </div>

@endsection