@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizacion de Jaula</h2></center>
    </br>
<form action="{{url('/jaula/' . $jaula->Id_Jaula)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
          <div class="form-group" >
            <label for="">Jaula:</label>
            <input readonly class="form-control" value="{{$jaula->Id_Jaula}}" name="Id_Jaula">
          </div>
        <br>
        <div>
            <label for="">Status:</label>
            <select name="Status" class="form-control">
              <option>Disponible</option>
              <option>Ocupada</option>
            </select>
        </div>        
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>
@endsection
