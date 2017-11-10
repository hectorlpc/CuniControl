@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro de Jaula:</h2></center>

    </br>
          <form action="{{url('/jaula')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label for="Coneja_Productora">Codigo de Jaula:</label>
            <input class="form-control" name="Id_Jaula">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>
@endsection
