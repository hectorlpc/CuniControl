<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Engorda</title>
    <link rel="stylesheet" href="css/pdf.css" media="all" />
  </head>
   <body>
      <div id="logo">
       <left> <img src="images/cea.jpg"></left>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <right><img src="images/cuni.jpg" ></right>
      </div>
      <h1 class="page-header">Listado general de decesos</h1>
      <div id="company" class="clearfix">
        <div>UNAM FES CUAUTITLÁN</div>
        <div>Carretera Cuautitlán-Teoloyucan Km. 2.5,<br /> Col. San Sebastián Xhala, Cuautitlán Izcalli, Edo. Mex.</div>
        <div>CP. 54714 </div>
      </div>
      <!-- <div id="project">
        <div>MODULO DE CUNICULTURA CEA</div>
        <div><span>Fecha:</span> Noviembre 11, 2017</div>

      </div> -->
      <br>
      <br>
    <main>
      @foreach($grupo_muertos as $nombre => $razas)
      <h3 class="agrupacion">{{$nombre}}</h3>
      <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Raza:</th>
                <th>Total:</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($razas as $raza)
              <tr>
                <td> {{$raza->Nombre_Raza}} </td>    
                <td> {{$raza->Muertos}} </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      @endforeach
      <hr>