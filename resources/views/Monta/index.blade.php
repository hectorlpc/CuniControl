@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")
    {{-- <input readonly type="date" value="{{$fecha_ini = date('Y-m-d')}}" name="Fecha_Actual"> --}}
    {{-- para controlar la fecha de fin "asi se muestran solo los registros en ese intervalo" --}}
    {{-- {{date_add($fecha_ini, date_interval_create_from_date_string('15 days'))
    $fecha_fin = date_format($fecha_ini, 'Y-m-d')}} --}}
    {{-- <input value="{{$fecha_fin}}" name=""> --}}
      <form method="get" action="{{url('/monta')}}">
            <h2>Inicio Registro Montas</h2>
          <div class="form-group">
            <label for="">Fecha de Monta:</label>
            <input type="" class="form-control" name="Id_Conejo_Hembra" placeholder="Buscar Coneja">
            <br>
          <div align="right">  <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/monta/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
            </div>
          </div>
        </form>
        <div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Jaula</th>
      <th>Fecha de Monta</th>
      <th>Tatuaje Coneja</th>
      <th>Tatuaje Conejo</th>
      <th>Fecha Diagnostico</th>
      <th>Resultado Diagnostico</th>
      <th>Fecha Parto Aprox</th>
      <th>Registró</th>
      <th>Diagnosticó</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($montas as $monta)
      <td> {{$monta->Id_Jaula}} </td>
      <td> {{$monta->Fecha_Monta}} </td>
      <td> {{substr($monta->Id_Conejo_Hembra,0,5) . ' - ' . substr($monta->Id_Conejo_Hembra,5,11)}} </td>
      <td> {{substr($monta->Id_Conejo_Macho,0,5) . ' - ' . substr($monta->Id_Conejo_Macho,5,11)}} </td>
      <td> {{$monta->Fecha_Diagnostico}} </td>
      <td> {{$monta->Resultado_Diagnostico}} </td>
      <td> {{$monta->Fecha_Parto}} </td>
      <td> {{$monta->Creador}} </td>
      <td> {{$monta->Modificador}} </td>
@if($monta->Resultado_Diagnostico != 'Positivo')      
      <td>
        <div class="btn-group btn-group-sm" role="group" aria-label="">
          <form method="POST" action="{{url('/monta/' . $monta->Id_Monta)}}">
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="Id_Monta" value="{{$monta->Id_Monta}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
           </form>
           <a href="{{url('/monta/' . $monta->Id_Monta . '/edit')}}" class="btn btn-secondary btn-outline-info">Diagnosticar</a>
        </div>
      </td>
@endif      
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
