@extends('layouts.Principal')
@section('content')
<label for="destete">REGISTRO DESTETE</label>
<div class="container">
  <form action="{{url('/destete')}}" method="post">
    {{ csrf_field() }}
      <div>
          <label for="num:gest">Tatuaje de coneja:</label>
          <select class="form-control" name="Id_Parto" type="text" >
              @foreach ($partos as $parto)
              <option value="{{$parto->Id_Parto}}">{{$parto->monta->Id_Conejo_Hembra}}</option>
            @endforeach
          </select>
      </div>

      <div>
          <label for="fecha">Fecha de destete:</label>
          <input class="form-control" name="Fecha_Destete" type="date" >
        </div>
      <div>
          <label for="cant_vivos">Cantidad de destetados:</label>
          <input readonly value="{{$parto->Numero_Vivos}}" class="form-control" name="Numero_Destetados" type="text" >
      </div>

      <div>
          <label for="peso">Peso promedio de los destetados:</label>
          <input value="{{$parto->Peso_Nacer}}" class="form-control" name="Peso_Destete" type="text" >
</div>
      <br>
      <button type="submit" class="btn btn-outline-primary">Agregar</button>
      <button type="submit" class="btn btn-outline-secondary">Regresar</button>

  </form>
</div>
@endsection
