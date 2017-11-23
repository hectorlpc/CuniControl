@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Conejos Por Jaulas</h2></center>
      <form method="get" action="{{url('/jaulas')}}">
          <div class="form-group">
            <label for="">Jaula:</label>
            <input type="" class="form-control" name="Id_Jaula" placeholder="Buscar">
            <br>
          <div align="right">  <button type="submit" class="btn btn-outline-primary">Buscar</button>
            {{-- <a href="{{url('/engorda/create')}}" type="submit" class="btn btn-outline-success">Agregar</a> --}}
            </div>
          </div>
        </form>
<div style="overflow-x:auto;">
      @foreach($grupo_jaulas as $nombre => $jaulas)
      <h3 class="agrupacion">{{$nombre}}</h3>
      <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Jaula:</th>
                <th>Conejos:</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($jaulas as $jaula)
              <tr>
                @if($jaula->Id_Jaula == NULL)
                <td> {{$jaula->Id_Jaula = 'Sin Jaula' }} </td>
                @else    
                <td> {{$jaula->Id_Jaula}} </td>
                @endif
                <td> {{$jaula->Conejos}} </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      @endforeach
</div>
</div>
@endsection