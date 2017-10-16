$('document').ready(function()
 {
  var menu="cerrado";

   $('.botonMenu').click(function () {
     if (menu=="cerrado"){
       $('.menuNavegacion').animate({left: '0%'});
       
       menu="abierto";
     }
        else {
         $('.menuNavegacion').animate({left: '-22%'})

         menu="cerrado";
        }
      })
 });
