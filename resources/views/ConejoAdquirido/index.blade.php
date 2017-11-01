@extends('layouts.Principal')
@section('content')
<div class="container">
          <center><h2>Conejo Adquirido</h2></center>
          <form>
            {{ csrf_field() }}
          <div class="form-group">
            <label for="">Número de tatuaje del conejo:</label>
            <input class="form-control" name="Id_Conejo" type="text" >
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/adquirido/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>             
      
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Tatuajes del conejo</th>
      <th>Tipo de adquisición:</th>
      <th>fecha de adquisición:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($adquiridos as $adquirido)
          <td>{{$adquirido->Id_Conejo}}</td>
          <td>{{$adquirido->Id_Adquisicion}}</td>
          <td>{{$adquirido->Fecha_Adquisicion}}</td>
          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/adquirido/' . $adquirido->Id_Adquirido)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Adquirido" value="{{$adquirido->Id_Adquirido}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/adquirido/' . $adquirido->Id_Adquirido . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
        </tr>
      @endforeach

  </tbody>
</table>

</div>

@endsection