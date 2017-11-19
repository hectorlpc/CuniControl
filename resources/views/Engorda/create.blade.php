@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Conejo de Engorda:</h2></center>

    </br>
          <form action="{{url('/engorda')}}" method="post">
            {{ csrf_field() }}
          <input hidden type="date" class="form-control" name="Fecha_Alta" value="{{$fecha = date('Y-m-d')}}">
          <br>
          <div class="form-group" >
            <label for="Conejo">Tatuajes del conejo:</label>
           <select class="form-control" name="Id_Conejo_Engorda">
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
