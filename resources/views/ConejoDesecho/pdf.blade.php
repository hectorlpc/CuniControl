<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Desechos</title>
    <link rel="stylesheet" href="css/pdf.css" media="all" />
  </head>
   <body>
      <div id="logo">
       <left> <img src="images/cea.jpg"></left>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <right><img src="images/cuni.jpg" ></right>
      </div>
      <h1 class="page-header">Listado de Engorda </h1>
      <div id="company" class="clearfix">
        <div>UNAM FES CUAUTITLÁN</div>
        <div>Carretera Cuautitlán-Teoloyucan Km. 2.5,<br /> Col. San Sebastián Xhala, Cuautitlán Izcalli, Edo. Mex.</div>
        <div>CP. 54714 </div>
      </div>
      <div id="project">
        <div>MODULO DE CUNICULTURA CEA</div>
        <div><span>Fecha:</span> Noviembre 11, 2017</div>

      </div>
      <br>
      <br>
    <main>
      <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Fecha del reporte:</th>      
                <th>Total de conejos de sementales Raza 1:</th>
                <th>Total de conejos de sementales Raza 2:</th>
                <th>Total de conejos de sementales Raza 3:</th>
                <th>Total de conejos de sementales Raza 4:</th>
                <th>Total de conejos de sementales Raza 5:</th>

                <th>Total de conejos de productoras Raza 1:</th>
                <th>Total de conejos de productoras Raza 2:</th>
                <th>Total de conejos de productoras Raza 3:</th>
                <th>Total de conejos de productoras Raza 4:</th>
                <th>Total de conejos de productoras Raza 5:</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($desechos as $desecho)
            @if($conejo->Engorda == 'Si')
            @if($conejo->Status == 'Vivo')
              <td> {{$conejo->Fecha_Nacimiento}} </td>    
              <td> {{$conejo->Tatuaje_Derecho}} </td>
              <td> {{$conejo->Tatuaje_Izquierdo}} </td>
              <td> {{$conejo->raza->Nombre_Raza}} </td>
              <td> {{$conejo->Genero}} </td>
              <td> {{$conejo->Status}} </td>
              </div>
            </td>
            </tr>
            @endif
            @endif
            @endforeach
        </tbody>
      </table>
      <hr>
 