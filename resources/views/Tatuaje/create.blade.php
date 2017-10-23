
@extends('layouts.Principal')
@section('content')

      <div class="container">
        <h2>TATUADO DE CONEJOS:</h2>
          <form method="POST" action="{{url('/tatuaje')}}">
            {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputPassword2">Numero de tatuaje de la madre:</label>
          <select class="form-control" name="Tatuaje_Hembra">
            @foreach($conejos as $conejo)
              @if($conejo->Genero == 'Hembra')              
                <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
              @endif
            @endforeach
            </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Numero de tatuaje del padre:</label>
          <select class="form-control" name="Tatuaje_Macho">
            @foreach($conejos as $conejo)
              @if($conejo->Genero == 'Macho')
              <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
              @endif
            @endforeach
            </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Raza:</label>
          <select class="form-control" name="Raza">
            @foreach($razas as $raza)
                <option value="{{$raza->Id_Raza}}">{{$raza->Id_Raza . ' ' . $raza->Nombre_Raza}}</option>
            @endforeach            
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Genero:</label>
            <input type="radio" name="Genero" value="Macho" /> Macho
            <input type="radio" name="Genero" value="Hembra" /> Hembra
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> Fecha de nacimiento:</label>
            <input class="form-control" type="date" name="fecha" min="2000-01-01" max="2050-01-01" step="2">
          </div>
<!--           <div class="form-group">
            <label for="exampleInputEmail1"> Peso al nacer (kg.):</label>
             <input type="string" name="Peso">
          </div> -->

          <div class="form-group">
            <label for="exampleInputEmail1">Tatuaje Derecho:</label>
             <input type="string" name="Tatuaje_Derecho"">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tatuaje Izquierdo:</label>
             <input type="string" name="Tatuaje_Izquierdo">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Status:</label>
            <input type="radio" name="Status_Conejo" value="Vivo" /> Vivo
            <input type="radio" name="Status_Conejo" value="Muerto" /> Muerto
          </div>





<!--           string substr ( string $string , int $start [, int $length ] ) -->

<!--           <div class="form-group">
        <label class="col-lg-2 control-label">Tatuaje derecho:</label>
        <div class="col-lg-10">
         <p class="form-control-static">folio d</p>
        </div>
        <label class="col-lg-2 control-label">Tatuaje izquierdo:</label>
        <div class="col-lg-10">
         <p class="form-control-static">folio i</p>
        </div>
      </div> -->
         
        </br>

          <button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection