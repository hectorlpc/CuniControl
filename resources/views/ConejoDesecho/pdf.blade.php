    <h1 class="page-header">Listado de conejos de Desecho </h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>     
                <th>Tatuaje del conejo:</th>
                <th>Raza:</th>
                <th>Procedencia:</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($desechos as $desecho)
              <td> {{$desecho->Id_Conejo_Desecho}} </td>    
              <td> {{$desecho->raza->Nombre_Raza}} </td>
              <td> {{$desecho->Procedencia}} </td>
            </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>