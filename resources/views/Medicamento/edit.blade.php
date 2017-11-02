@extends('layouts.Principal')
@section('content')
      <div class="container">
        <center><h2>Actualizar Registro De Medicamentos:</h2></center>
    </br>
          <form action="{{url('/medicamento/' . $medicamento->Id_Medicamento)}}" method="POST" role="form">
               {{method_field('patch')}}
            {{ csrf_field() }}
      
          <div class="form-group">
            <label for="Medicamento">Código del medicamento:</label>
           <input readonly class="form-control" type="text" name="Id_Medicamento" value= "{{$medicamento->Id_Medicamento}}">
          </div>
          <div class="form-group">
            <label for="Medicamento">Nombre del medicamento:</label>
            <input class="form-control" type="text" name="Nombre_Medicamento" value= "{{$medicamento->Nombre_Medicamento}}">
          </div>
          <div class="form-group">
            <label for="Medicamento">Unidades existentes del medicamento:</label>
            <input type="number" min="0" max="5000" name="Cantidad" value= "{{$medicamento->Cantidad}}">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>


        </form>
      </div>


@endsection