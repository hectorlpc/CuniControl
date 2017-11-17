@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    @include("compartidas.alertas")

          <center><h2>Inicio Registro de Horas</h2>
          <form method="get" action="{{url('horas/')}}">
          <div class="form-group">
            <label for="">Fecha de las actividades: </label>
            <input type="date" class="form-control" id="" placeholder="Buscar" name="Fecha">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/horas/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
            </div>
          </div>
        </form>
        <div>
          <label for="">Total de horas validas: </label>
          <input readonly type="text" name="Cantidad_Horas" value="{{$conteohoras[0]->total/10000}}">
        </div>
        <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Fecha:</th>
      <th>Hora de entrada:</th>
      <th>Hora de salida:</th>
      <th>Actividad realizada</th>
      <th>Status:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($horas as $hora)
          <td>{{$hora->Fecha}}</td>
          <td>{{$hora->Hora_Entrada}}</td>
          <td>{{$hora->Hora_Salida}}</td>
          <td>{{$hora->actividad->Nombre_Actividad}}</td>
          <td>{{$hora->Status}}</td>

          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('horas/' . $hora->Id_Horas)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Hora" value="{{$hora->Id_Horas}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form>
            </div>
          </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

@endsection
