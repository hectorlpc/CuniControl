@extends('layouts.Principal')
@section('content')
<label for="destete">REGISTRO DESTETE</label>
<div class="container">
  <form action="{{url('/destete/' . $destete->Id_Destete)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
      <div>
          <label for="num:gest">Tatuaje de coneja:</label>
              <input readonly value="{{$destete->parto->monta->Id_Conejo_Hembra}}" class="form-control">
      </div>

      <div>
          <label for="fecha">Fecha de destete:</label>
          <input readonly value="{{$destete->Fecha_Destete}}" class="form-control" name="Fecha_Destete" type="date" >
        </div>
      <div>
          <label for="cant_vivos">Cantidad de destetados:</label>
          <input value="{{$destete->Numero_Destetados}}" class="form-control" name="Numero_Destetados" type="" >
      </div>

      <div>
          <label for="peso">Peso promedio de los destetados:</label>
          <input value="{{$destete->Peso_Destete}}" class="form-control" name="Peso_Destete" type="" >
</div>
      <br>
      <button type="submit" class="btn btn-outline-primary">Actualizar</button>
  </form>
</div>
@endsection
