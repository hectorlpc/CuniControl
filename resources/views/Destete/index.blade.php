@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<label for="destete">INICIO DESTETE</label>

<div class="container">
            <form method="get" action="{{url('destete/')}}">
              <div class="form-group">
                <label for="">Tatuaje Coneja</label>
                <input type="" class="form-control" name="Id_Destete" placeholder="Buscar">
                <br>
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="{{url('/destete/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
              </div>
            </form>
            <table class="table table-sm table-responsive">
      <thead class="thead-default">
        <tr>
          <th>Numero de Coneja</th>
          <th>Fecha de destete</th>
          <th>Cantidad de destetados</th>
          <th>Peso promedio de los destetados (Kilos)</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($destetes as $destete)
          <td>{{$destete->parto->monta->Id_Conejo_Hembra}}</td>
          <td>{{$destete->Fecha_Destete}}</td>
          <td>{{$destete->Numero_Destetados}}</td>
          <td>{{$destete->Peso_Destete}}</td>
          <td></td>
          <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="">
        <form method="POST" action="{{url('/destete/' . $destete->Id_Destete)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
        </form>
        <a href="{{url('/destete/' . $destete->Id_Destete . '/edit')}}" type="button" class="btn btn-secondary btn-outline-info">Modificar</a></td>
      </div>
        </tr>
        @endforeach
      </tbody>
    </table>

    </div>
@endsection
