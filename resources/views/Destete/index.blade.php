@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')

<div class="container">
    @include("compartidas.alertas")

  <center><h2>Inicio de Destete</h2></center>
            <form method="get" action="{{url('destete/')}}">
              <div class="form-group">
                <label for="">Tatuaje Coneja</label>
                <input type="" class="form-control" name="Id_Conejo_Hembra" placeholder="Buscar">
                <br>
                <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
                <a href="{{url('/destete/create')}}" type="submit" class="btn btn-outline-success">Agregar</a></div>
              </div>
            </form>
            <table class="table table-sm table-responsive">
      <thead class="thead-default">
        <tr>
          <th>Fecha</th>
          <th>Coneja</th>
          <th>Destetados</th>
          <th>No destetados</th>
          <th>Adoptados destetados</th>
          <th>Adoptados no destetados</th>
          <th>Notas</th>
          <th>Peso</th>          
          <th>Registró</th>
          <th>Actualizó</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($destetes as $destete)
          <td> {{$destete->Fecha_Destete}} </td>          
          <td> {{$destete->parto->monta->Id_Conejo_Hembra}} </td>
          <td> {{$destete->Destetados}} </td>
          <td> {{$destete->No_Destetados}} </td>
          <td> {{$destete->Adoptados_Destetados}} </td>
          <td> {{$destete->Adoptados_No_Destetados}} </td>
          <td> {{$destete->Notas}} </td>
          <td> {{$destete->Peso_Destete}} </td>
          <td> {{$destete->Creador}} </td>
          <td> {{$destete->Modificador}} </td>          
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
