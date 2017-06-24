function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginRight = "255px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
    document.body.style.backgroundColor = "white";

}


window.addEventListener('mouseup', function(event)
{
  // Get the modal
  var modal = document.getElementById('mySidenav');

   if(event.target != modal && event.target.parentNode != modal)
   {
      //modal.style.display = 'none';

      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginRight= "0";
      document.body.style.backgroundColor = "white";

   }

});
