@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Conejo Semental:</h2></center>

    </br>
          <form action="{{url('/cemental')}}" method="post">
            {{ csrf_field() }}
          <div>
            <label>Fecha de alta</label>
            <input class="form-control" type="date" name="Fecha_Activo" value="{{$fecha = date('Y-m-d')}}">
          </div>
          <br>
          <div>
            <label> Seleccione Jaula</label>
            <select class="form-control" name="Id_Jaula">
              <option> -- Jaulas -- </option>
              @foreach($jaulas as $jaula)
                <option value="{{$jaula->Id_Jaula}}">{{$jaula->Id_Jaula}}</option>
              @endforeach
            </select>
          </div>
          <br>
          <div class="form-group" >
            <label for="Conejo_Cemental">Número de tatuaje del conejo:</label>
           <select class="form-control" name="Id_Conejo_Macho">
              <option> -- Seleccione los tatuajes del conejo -- </option>
              @foreach ($conejos as $conejo)
                  <option value="{{$conejo->Id_Conejo}}">{{ substr($conejo->Id_Conejo,0,5) . ' - ' . substr($conejo->Id_Conejo,5,11) }}</option>
              @endforeach
            </select>
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection
