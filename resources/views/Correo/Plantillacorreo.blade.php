<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <div class="container">
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Hola {{$Nombre_Usuario}}</h4>
    <p>Bienvenido a CuniControl</p>
    <p>Por Favor Confirma tu Correo</p>
    <hr>
    <a class="" href="{{url('/Usuario/activacion/'.$confirmacioncode)}}">Confirmar</a>
</div>
</div>
  </body>
</html>
