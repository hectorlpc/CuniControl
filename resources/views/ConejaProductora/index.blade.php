@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Coneja Productora</h2></center>
          <form>
            <div class="form-group">
              <label for="Coneja_Productora">Número de tatuaje de la coneja:</label>
              <input type="" name="Id_Conejo_Hembra" class="form-control">
              <br>
              <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
          </form>
            <a href="{{url('/productora/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>

        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Coneja de producción:</th>
      <th>Raza Coneja:</th>
      <th>Numero de productora:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($productoras as $productora)
      @if($productora->Status == 'Activo')
      <td> {{$productora->Id_Conejo_Hembra}} </td>
      <td> {{$productora->raza->Nombre_Raza}} </td>
      <td> {{$productora->Numero_Conejo}} </td>
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/productora/' . $productora->Id_Conejo_Hembra)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Conejo_Hembra" value="{{$productora->Id_Conejo_Hembra}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form> <a href="{{url('/productora/' . $productora->Id_Conejo_Hembra . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
        </div>
      </td>
    </tr>
      @endif
      @endforeach
  </tbody>
</table>

</div>
@endsection
