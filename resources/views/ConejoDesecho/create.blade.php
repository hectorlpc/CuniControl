@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro De Conejos de desecho:</h2></center>

    </br>
          <form action="{{url('/desecho')}}" method="post">
            {{ csrf_field() }}
          <div class="form-group" >
            <label for="">Tatuaje del conejo:</label>
           <select class="form-control" name="Id_Conejo_Desecho">
              <option> -- Seleccione los tatuajes del conejo -- </option>
              @foreach ($conejos as $conejo)
                @if($conejo->Status == 'Vivo')
                  <option value="{{$conejo->Id_Conejo}}">{{$conejo->Tatuaje_Derecho . " - " . $conejo->Tatuaje_Izquierdo}}</option>
                @endif
              @endforeach
            </select>
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>


        </form>
      </div>
@endsection
