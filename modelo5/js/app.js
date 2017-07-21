function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";

}

/***************************/

/* FORMA 1 DE OCULTAR EL MENU */

/***************************/

/*
window.addEventListener('mouseup', function(event)
{
  // Get the modal
  var modal = document.getElementById('mySidenav');

   if(event.target != modal && event.target.parentNode != modal)
   {
      //modal.style.display = 'none';

      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";

   }

}); */


/*

El evento onMouseDown sucede cuando el usuario pulsa un botón del ratón.
El evento onMouseMove tiene lugar cuando el usuario mueve el cursor del ratón.
El evento onMouseUp se genera cuando se deja de pulsar un botón del ratón.

*/


/*****************************/

/* FORMA 2 DE OCULTAR EL MENU  */

/***************************/

document.getElementById("main").addEventListener("mouseup", myFunction);   /* con mousedown  y  mouseup  puedo ocultar el menu   */

function myFunction()
{
  var modal = document.getElementById('mySidenav');

  /*modal.style.backgroundColor = "cadetblue";*/

      //modal.style.display = 'none';

      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";
}
