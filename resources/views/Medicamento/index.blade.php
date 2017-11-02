@extends('layouts.Principal')
@section('content')
<div class="container">
          <center><h2>Medicamentos</h2></center>
          <form method="get" action="{{url('medicamento/')}}">
          <div class="form-group">
            <label for="">Nombre del medicamento:</label>
            <input type="" class="form-control" name="Id_Medicamento" placeholder="Buscar">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/medicamento/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>  
          </div>
        </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Codigo:</th>
      <th>Nombre Medicamento:</th>
      <th>Unidades existentes del medicamento:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($medicamentos as $medicamento)
          <td>{{$medicamento->Id_Medicamento}}</td>
          <td>{{$medicamento->Nombre_Medicamento}}</td>
          <td>{{$medicamento->Cantidad}}</td>

          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/medicamento/' . $medicamento->Id_Medicamento)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Medicamento" value="{{$medicamento->Id_Medicamento}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/medicamento/' . $medicamento->Id_Medicamento . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
        </tr>
        @endforeach

  </tbody>
</table>

</div>

@endsection