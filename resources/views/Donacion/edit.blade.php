@extends('layouts.Principal')
@section('content')

      <div class="container">
        <h2>ACTUALIZACIÓN DE DONACIÓN DE GAZAPOS:</h2>
      
          <form>
          <div class="form-group">
            <label for="exampleInputPassword2">Numero de la donación:</label>
          <input class="form-control" name="parto" type="text" >
          </div>
          <div class="form-group">
          <label for="  ">Parto Donante:</label>
          <select class="form-control" name="Tatuajes">
            <option>PA8716</option>
            <option>PA8712</option>
            <option>PA0917</option>
            </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Parto Receptor:</label>
          <select class="form-control" name="Tatuajes">
            <option>PA0735</option>
            <option>PA7519</option>
            <option>PA1623</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Cantidad de gazapos donados:</label>
            <input type="number" name="num" min="0" max="20">
      </div>
         
        </br>

          <DIV align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </form>
      </div>
@endsection