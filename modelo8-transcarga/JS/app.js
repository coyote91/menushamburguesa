function mostrar()
{
  //https://www.funcion13.com/anade-y-quita-clases-css-con-javascript-con-classlist/

  var open = document.getElementById("user-data").classList.contains('open');
  var tcon_transform = document.getElementById("open_user_data").classList.contains("tcon-transform");

        if (open && tcon_transform )
        {
                 document.getElementById("user-data").classList.remove('open');
                         document.getElementById("open_user_data").classList.remove("tcon-transform");


        }
        else {
                document.getElementById("user-data").classList.add('open');
                document.getElementById("open_user_data").classList.add("tcon-transform");
        }

}


function window_onload() {
  window.addEventListener("scroll",navbar_reset_top,false);
}

var navbar_top=100;

function navbar_reset_top() {
  var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
  if(scrollTop>navbar_top&&navbar.className==="navbar_absolute") {
    document.getElementById("navbar").className="navbar_fixed";

  }
  else if(scrollTop<navbar_top&&navbar.className==="navbar_fixed") {
    document.getElementById("navbar").className="navbar_absolute";

  }
}
