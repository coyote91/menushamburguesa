<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcarga</title>
<link rel="icon" type="image/png" href="./img/favicones/m2/f2.jpg" />
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">



</head>
<body  onload="javascript: window_onload();" >

<div id="navbar" class="navbar_absolute">

  <div class="container">

      <div id="logo">

      </div>



    <div id="contright">

        <div id="contmenu">

            <button onclick="mostrar();" aria-label="toggle menu" class="tcon tcon-menu--xbutterfly absolute " id="open_user_data" type="button">
            <span aria-hidden="true" class="tcon-menu__lines"></span>
            <span class="tcon-visuallyhidden"></span>
            </button>

           <span class="msgmenu">MENÚ</span>

        </div>

      <!--  <div id="contbtnflag">
         <span>
         </span> <i class="icon-down-open"></i>

        </div>
          --->

    </div>

  </div>

</div>

<!--- END SECCION BARRA ---->



<!-- MENU DE OPCIONES --->

<!---  open  si lo quito oculta el menu opciones, hace que las opciones sean visibles -->

<div id="user-data" class="absolute z-depth-2 white" data-open="true" data-turbolinks-permanent="" style="height: 956px; top: 71px;">
    <div>
        <nav>
              <ul class="no-list collection main-nav">
                  <div class="collection-item no-padding-large user-nav" style="font-size:1.1em;">
                            <a class="grey-hover" href="/">
                              <li class="top-space row middle-xs grey-hover lighten-3-hover">
                                Inicio
                              </li>
                            </a>

                            <a href="/agenda">
                              <li class="top-space row middle-xs grey-hover lighten-3-hover">
                                Agenda
                              </li>
                            </a>

                            <a class="grey-hover" href="/cursos">
                              <li class="top-space row middle-xs grey-hover lighten-3-hover">
                                  Cursos
                              </li>
                            </a>

                            <a href="/articulos">
                              <li class="top-space row middle-xs grey-hover lighten-3-hover">
                                  Artículos
                              </li>
                            </a>

                            <a href="/talleres">
                              <li class="top-space row middle-xs grey-hover lighten-3-hover">
                                Talleres
                            </li>

                            </a>

                            <a href="/questions">
                              <li class="top-space row middle-xs grey-hover lighten-3-hover">
                                Dudas
                            </li>
                            </a>


                            <a href="mailto:ayuda@Transcarga.com.co">
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

<!-- END MENU DE OPCIONES  -->

<div id="contenedorinformacion">

  <div id="cuadropublicidaduno">


            <div id="contglobal">

                        <div class="contmensajeprincipal">



                      <span class="tituloprincipal"> CONECTAMOS A TRANSPORTISTAS CON CLIENTES QUE ENVIAN.</span>  <br>  <br> <br>



                              <div id="contbotones">

                                  <div id="contbtnuno">

                                      <span>Encontrar cargas</span>

                                  </div>

                                 <div id="contbtndos">

                                     <span>Enviar una carga </span>

                                 </div>


                              </div>




                        </div>

                        <div class="contimagenpublicidad">

                        </div>

            </div>



  </div>

  <div id="cuadropublicidad2">


       <div id="imgpbldos"></div>



  </div>


</div>

<script src="./JS/app.js" charset="utf-8"></script>

  </body>
</html>
