@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')

      <div class="container">
        <center><h2>Actualizar Registro De Raza:</h2></center>
    </br>
          <form action="{{url('/raza/' . $raza->Id_Raza)}}" method="POST" role="form">
            {{method_field('patch')}}
            {{ csrf_field() }}
          <div class="form-group">
            <label for="Raza">Código:</label>
           <input readonly class="form-control" type="text" name="Id_Raza" value= "{{$raza->Id_Raza}}">
          </div>
          <div class="form-group">
            <label for="Raza">Nombre:</label>
            <input class="form-control" type="text" name="Nombre_Raza" value= "{{$raza->Nombre_Raza}}">
          </div>
          <div class="form-group">
            <label for="Raza">Descripción:</label>
            <input class="form-control" type="text" name="Descripcion_Raza" value="{{$raza->Descripcion_Raza}}">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>


        </form>
      </div>


@endsection