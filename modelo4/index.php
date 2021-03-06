<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

<link rel="stylesheet" href="./css/style.css">
<!--<script src="./js/menu.js" charset="utf-8"></script> -->

<script type="text/javascript">

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



</script>

  </head>
  <body>
                                                                <!--  tcon-transform   hace que salga la X del menu hamburguesa cuando las opciones son visibles    --->


  <button onclick="mostrar();" aria-label="toggle menu" class="tcon tcon-menu--xbutterfly absolute " id="open_user_data" type="button">
  <span aria-hidden="true" class="tcon-menu__lines"></span>
  <span class="tcon-visuallyhidden"></span>
  </button>



                                              <!---  open  si lo quito oculta el menu opciones, hace que las opciones sean visibles -->

    <div id="user-data" class="absolute z-depth-2 white" data-open="true" data-turbolinks-permanent="" style="height: 956px; top: 71px;">
        <div>
            <nav>
                <ul class="no-list collection main-nav">
                  <div class="collection-item no-padding-large user-nav" style="font-size:1.1em;">
                        <a class="grey-hover" href="/"><li class="top-space row middle-xs grey-hover lighten-3-hover">
                        Inicio
                        </li>
                        </a><a href="/agenda"><li class="top-space row middle-xs grey-hover lighten-3-hover">
                        Agenda
                        </li>
                        </a><a class="grey-hover" href="/cursos"><li class="top-space row middle-xs grey-hover lighten-3-hover">
                        Cursos
                        </li>
                        </a><a href="/articulos"><li class="top-space row middle-xs grey-hover lighten-3-hover">
                        Artículos
                        </li>
                        </a><a href="/talleres"><li class="top-space row middle-xs grey-hover lighten-3-hover">
                        Talleres
                        </li>
                        </a><a href="/questions"><li class="top-space row middle-xs grey-hover lighten-3-hover">
                        Dudas
                        </li>
                        </a><a href="mailto:ayuda@codigofacilito.com">
                          <li class="top-space row middle-xs grey-hover lighten-3-hover green-flat-text">
                            Soporte y Ayuda
                            </li>
                        </a>
                    </div>
                      <div class="collection-item no-padding-large user-nav">
                            <li class="top-space">
                                <a href="/users/sign_in">Iniciar sesión
                                </a>
                            </li>

                            <li class="top-space">
                              <a href="/users/sign_up">Crear cuenta
                              </a>
                           </li>
                      </div>
                </ul>
            </nav>
        </div>
    </div>

<script src="./js/jquery/jquery-3.2.1.min.js" charset="utf-8"></script>

  </body>
</html>
