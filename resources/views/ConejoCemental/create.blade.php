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
          <div class="form-group" >
            <label for="Conejo_Cemental">Número de tatuaje del conejo:</label>
           <select class="form-control" name="Id_Conejo_Macho">
              <option> -- Seleccione los tatuajes del conejo -- </option>
              @foreach ($conejos as $conejo)
                @if( $conejo->Genero == 'Macho')
                @if( $conejo->Status == 'Vivo')
                @if( $conejo->Semental != 'Si')
                  <option value="{{$conejo->Id_Conejo}}">{{$conejo->Tatuaje_Derecho . " - " . $conejo->Tatuaje_Izquierdo}}</option>
                @endif
                @endif
                @endif
              @endforeach
            </select>
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection
