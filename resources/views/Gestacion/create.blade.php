@extends('layouts.Principal')
@section('content')
<div class="container">
    <form>
      <h2>Registro de Diagnostico de Gestacion</h2>
          <div class="{{url('/gestacion')}}" method="post">
            <label for="">Numero Coneja</label>
            <select class="form-control" name="TatuajeH">
              @foreach($conejos as $conejo)
              <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Fecha de Monta: </label>
            <label for="">2017/10/19</label>
          </div>
          <div class="form-group">
            <label for="">Tatuaje de Conejo: </label>
            <label for="">23410</label>
          </div>
            <div class="form-group">
              <label for="">Fecha de diagnostico</label>
              <input type="date" class="form-control" id="" placeholder="Introduce la monta">
            </div>
          <div class="form-group">
            <label for="">Resulatdo Diagnostico</label>
            <select class="form-control" name="TatuajeM">
              <option value="">Positivo</option>
              <option value="">Negativo</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Fecha Tentativa de Parto</label>
            <input class="form-control" type="date" name="" value="">
          </div>
          <br>
          <button type="submit" class="btn btn-outline-primary">Enviar Registro</button>
        </form>
</div>
@endsection
