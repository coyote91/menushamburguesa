<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="./css/menu.css">

<script>

	/*function mostrar()
	{



       var mostrar = document.getElementById("mostrar");



       if (  mostrar.style.display == "none") {

               mostrar.style.display = "block";

        }
        else{

            mostrar.style.display = "none";
        }

	}*/


	function mostrar()
	{
		document.getElementById("mostrar").style.display="block";

	}

	window.addEventListener('mouseup', function(event)
	{

	  var box = document.getElementById('mostrar');
	   if(event.target != box && event.target.parentNode != box)
	   {
	   	  box.style.display = 'none';

	   }

	});
</script>

</head>
<body>

<div id="mostrarnav" onclick="mostrar();"></div>

<nav class="mostrar" id="mostrar">


<ul class="menu">
	<li><a href="">Opcion 1 </a></li>
	<li><a href="">Opcion 2 </a></li>
	<li><a href="">Opcion 3 </a></li>
	<li><a href="">Opcion 4 </a></li>
	<li><a href="">Opcion 5 </a></li>
	<li><a href="">Opcion 6 </a></li>
</ul>



</nav>

<header>

	<h1>titulo x</h1>
</header>

<article>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, vel quo nostrum. Hic labore ratione in aperiam. Inventore odio recusandae, sunt impedit reprehenderit cum ullam, eaque rerum tempora quia, delectus.</p>
</article>


</body>
</html>
