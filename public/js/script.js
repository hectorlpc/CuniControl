$('document').ready(function()
 {
  var menu="cerrado";

   $('.botonMenu').click(function () {
     if (menu=="cerrado"){
       $('.menuNavegacion').animate({left: '0%'});
       $('.contenedorPrincipal').animate({marginLeft: '22%', width:'78%'})
       $('.pieDePagina').animate({marginLeft: '22%'})
       menu="abierto";
     }
        else {
         $('.menuNavegacion').animate({left: '-22%'})
         $('.contenedorPrincipal').animate({marginLeft: '0%', width:'100%'})
            $('.pieDePagina').animate({marginLeft: '0%'})
         menu="cerrado";
        }
      })
 });
