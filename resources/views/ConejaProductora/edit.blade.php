@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Coneja Productora:</h2></center>
    </br>
<form action="{{url('/productora/' . $productora->Id_Conejo_Hembra)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}      
          <div>
            <label>Fecha:</label>
            <input class="form-control" type="date" name="Fecha_Muerte" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <br>
          <div class="form-group" >
            <label>Número de tatuaje de la coneja:</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Hembra" value="{{$productora->Id_Conejo_Hembra}}">
          </div>
          <div class="form-group">
            <label for="Coneja_Productora">Código de conejo:</label>
            <input readonly class="form-control" name="Numero_Conejo" value="{{$productora->Numero_Conejo}}">
          </div>
          <div class="form-group" >
            <label>Status:</label>
            <select class="form-control" name="Status">
              <option> -- Seleccione motívo de baja -- </option>
                  <option> Desecho </option>
                  <option> Muerto </option>
            </select>
          </div>          
        <br>        
          <div align="right"><button type="submit" class="btn btn-outline-primary">Dar de baja</button>
</form>
      </div>
@endsection
