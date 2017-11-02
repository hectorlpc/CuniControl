@extends('layouts.Principal')
@section('content')
<div class="container">
  <center><h2>Enfermedades</h2></center>
  <form method="get" action="{{url('enfermedad/')}}">
    <div class="form-group">
        <label for="">Nombre de la enfermedad:</label>
        <input type="" class="form-control" name="Id_Enfermedad" placeholder="Buscar">
        <br>
        <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
        <a href="{{url('/enfermedad/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>  
      </div>
    </form>
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Código:</th>
      <th>Nombre de La Enfermedad</th>
      <th>Descripción de la enfermedad:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($enfermedades as $enfermedad)
          <td>{{$enfermedad->Id_Enfermedad}}</td>
          <td>{{$enfermedad->Nombre_Enfermedad}}</td>
          <td>{{$enfermedad->Descripcion_Enfermedad}}</td>

          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/enfermedad/' . $enfermedad->Id_Enfermedad)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Enfermedad" value="{{$enfermedad->Id_Enfermedad}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/enfermedad/' . $enfermedad->Id_Enfermedad . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
        </tr>
        @endforeach
  </tbody>
</table>
</form>
</div>
</form>
@endsection