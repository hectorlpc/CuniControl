@extends('layouts.Principal')
@section('content')
  
    <div class="container">
<form action="{{url('/adquisicion/' . $adquisicion->Id_Adquisicion)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
      <center><h2><label for="Adquisicion">Modificar Tipo de Adquisición</label></h2></center>

          <div>
              <label for="id_adquisicion">Codigo de Adquisición:</label>
              <input readonly class="form-control" type="text" name="Adquisición" value="{{$adquisicion->Id_Adquisicion}}">
          </div>
<br>
          <div>
              <label for="nombre">Nombre de adquisición:</label>
              <input class="form-control" name="Nombre_Adquisicion" type="text" value="{{$adquisicion->Nombre_Adquisicion}}" >
          </div>
<br>

<div>
    <label for="descripcion">Descripcion de adquisición:</label>
    <input class="form-control" name="Descripcion_Adquisicion" type="text" value="{{$adquisicion->Descripcion_Adquisicion}}">
</div>

<br>

    <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>
      </form>
    </div>

@endsection