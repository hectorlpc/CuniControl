@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Tatuado de Conejos:</h2></center>
          <form method="POST" action="{{url('/tatuaje')}}">
            {{csrf_field()}}
          <div class="form-group">
            <label for="">Numero de tatuaje de la madre:</label>
            <select class="form-control" name="Id_Destete" id="conejaDestete">
              <option> -- Seleccione coneja -- </option>
            @foreach($destetes as $destete)
            @if($destete->Tatuados < $destete->Destetados)
              <option value="{{$destete->Id_Destete}}">{{$destete->parto->monta->Id_Conejo_Hembra}}</option>
            @endif
            @endforeach
            </select>
          <input type="hidden" id="numeroConeja" name="Numero_Conejo" value="{{$destete->parto->monta->conejo->productora->Numero_Conejo}}" >
          <input type="hidden" value="{{$destete->parto->monta->conejo->Id_Raza}}" id="razaTatuaje" name="Id_Raza">
          </div>
          <div>
            <label for="">Fecha de Parto:</label>
            <input readonly id="fechaParto" class="form-control" type="date" name="Fecha_Nacimiento">
          </div>
          <br>
          <div class="form-group">
            <label for="">Genero:</label>
            <input type="radio" name="Genero" value="Macho" /> Macho
            <input type="radio" name="Genero" value="Hembra" /> Hembra
          </div>
            <label for="">Consecutivo de conejo:</label>
            <input readonly class="form-control" name="Consecutivo" id="numeroConsecutivo" >
        </br>
          <button type="submit" class="btn btn-outline-primary">Registrar</button>
      </form>
      </div>
@endsection
