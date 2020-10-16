<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/styles.css">
	<!-- colocar icono en la barra-->
	<link rel="stylesheet icon" href="images/Logo-miniaturaR.png" type="image/png">
	<!-- enlazar carpetas-->
	<link rel="stylesheet" href="css/inicio.css" type="text/css">
	<link rel="stylesheet" href="css/estiloCab.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<!-- SLIDER -->
		<script src="js/jquery.flexslider.js"></script>
			<script type="text/javascript" charset="utf-8">
  			$(window).load(function() {
    			$('.flexslider').flexslider({
    				touch: true,
    				pauseOnAction: false,
    				pauseOnHover: false,
    				});
  				});
			</script>

    <title>RULETA HAZE</title>
</head>
<body>
	<header>
	<!-- cabecera -->
	<section class="title">
		<img src="images/LogoR2.png" alt="" class="imagen">	
		<h1></h1>
	</section>

	<nav class="navegacion">
		<ul class="menu">

			<li>
				<a href="app/view/Web.php">
					<img src="img/software.jpg" alt="" class="imagen">
					<span class="text-item">Ruleta Haze</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="app/view/Nosotros.php">
					<img src="img/nosotros.jpg" alt="" class="imagen">
					<span class="text-item">Nosotros</span>
					<span class="down-item"></span>
				</a>
			</li>

			
			<li>
				<a href="app/view/login.php">
					<img src="img/sesion.jpg" alt="" class="imagen">
					<span class="text-item">Iniciar sesión</span>
					<span class="down-item"></span>
				</a>
			</li>

		</ul>
	</nav>
	</header>
	
	<!--Cuerpo de la pagina  -->
	<main>
        <!--Slider-->
<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="images/slider1.jpg" alt="">
				<section class="flex-caption">
					<p><b>RULETA HAZE</b><br>Es un software que consiste en que los usuarios jueguen con la posibilidad de acertar a los números establecidos en la ruleta.</p>
				</section>
			</li>
			<li>
				<img src="images/slider2.jpg" alt="">
				<section class="flex-caption">
					<p><b>¿QUIERES JUGAR?</b><br>Es fácil, simplemente debes presionar en <b>Iniciar Sesión</b> y en caso que no tengas una cuenta dale en <b>Crear Cuenta</b>.</p>
				</section>
			</li>
			<li>
				<img src="images/slider3.jpg" alt="">
				<section class="flex-caption">
					<p><b>¿TE CONSIDERAS UNA PERSONA AFORTUNADA?</b><br>Este software es el indicado para ti, <br>entra y prueba tu suerte.</p>
				</section>
			</li>
			<!--li>
				<img src="images/slider4.jpg" alt="">
			</li-->
		</ul>
	</div>
	</main>
</body>
</html>
