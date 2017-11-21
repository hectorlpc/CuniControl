@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Grupos:</h2></center>

    </br>
          <form action="{{url('/grupo')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label>Clave del grupo:</label>
            <input class="form-control" name="Clave_Grupo">
          </div>
          <div class="form-group" >
            <label for="">Materia:</label>
           <select class="form-control" name="Id_Materia">
              <option> -- Seleccione la materia -- </option>
              @foreach ($materias as $materia)
                  <option value="{{$materia->Id_Materia}}">{{$materia->Nombre_Materia}}</option>
              @endforeach
            </select>
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>
@endsection
