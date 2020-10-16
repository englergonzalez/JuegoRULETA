<?php
require_once('../model/UserModel.php');
require_once('../controller/UserController.php');
session_start();
if (isset($_SESSION['use'])) {
	$cuse = new UserController();
	$use = unserialize($_SESSION['use']);
	//$cuse->updateUser( $use , $_POST['money']);
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.44">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="stylesheet icon" href="../../images/Logo-miniaturaR.png" type="image/png">
    <title>RULETA HAZE - JUEGO</title>
</head>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCafgxxFPwTCzdJW_EatpRfc4YhKOPHUwI",
    authDomain: "juegoruletabd.firebaseapp.com",
    databaseURL: "https://juegoruletabd.firebaseio.com",
    projectId: "juegoruletabd",
    storageBucket: "juegoruletabd.appspot.com",
    messagingSenderId: "623344972327",
    appId: "1:623344972327:web:9a34efe1ef2ded3005d402",
    measurementId: "G-504L618YZV"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<body>
	<header class="header">
        <!-- logo -->
		<figure class="header-brand">
			
		</figure>
		<!-- menu -->
		<nav class="header-menu">
		  <ol> 
			<li><h2> <a href="../../app/view/WelcomeUserView.php"><?php echo strtoupper("".$use->getNom_use()."   ".$use->getApe_use() )?></a></h2></li>
			
		  </ol>
		</nav>
    </header>
<div class="ventana" onclick=clickaction(this) id="ventanaGanaPierde" style="display: none;">
	<div id="cerrar"> <a href="javascript:cerrarVentana()"><img src="../../img/cancel.png"></a> </div>
</div>

<div>
	
<h1 style="color: darkseagreen;"></h1>
<h1 id="titulo" style="color: darkseagreen; ">R U L E T A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A M E R I C A N A</h1>
<canvas id="juego" width="1720" height="701"></canvas>
<p id="pregunta">¿Cúanto dinero tienes disponible?</p>
		<div class="button" id="jugar"  href ="">Jugar</div>
	  	<div class="vara"></div>
		<img src="../../img/mesa.png" id="ruleta_mesa">
		<img src="../../img/imagen.png" id="ruleta">
		<div class="bola" id="bola"></div>
		<div class="dinero" name="dinero" id="dinero">0€</div>
		<input type="button" class="botonimagen1" value=""  onclick=clickaction(this) id="b1"/>
		<input type="button" class="botonimagen5" value=""  onclick=clickaction(this) id="b5"/>
		<input type="button" class="botonimagen10"value="" onclick=clickaction(this) id="b10"/>

	<table class="tablero" id ="tablero">
		<tr>
			<td><button onclick=clickaction(this) id="3"></button></td>
			<td><button onclick=clickaction(this) id="6"></button></td>
			<td><button onclick=clickaction(this) id="9"></button></td>
			<td><button onclick=clickaction(this) id="12"></button></td>
			<td><button onclick=clickaction(this) id="15"></button></td>
			<td><button onclick=clickaction(this) id="18"></button></td>
			<td><button onclick=clickaction(this) id="21"></button></td>
			<td><button onclick=clickaction(this) id="24"></button></td>
			<td><button onclick=clickaction(this) id="27"></button></td>
			<td><button onclick=clickaction(this) id="30"></button></td>
			<td><button onclick=clickaction(this) id="33"></button></td>
			<td><button onclick=clickaction(this) id="36"></button></td>
			<td><button onclick=clickaction(this) id="3-2A1"></button></td>
		</tr>
		<tr>
		 <td><button onclick=clickaction(this) id="2"></button></td>
		 <td><button onclick=clickaction(this) id="5"></button></td>
		 <td><button onclick=clickaction(this) id="8"></button></td>
		 <td><button onclick=clickaction(this) id="11"></button></td>
		 <td><button onclick=clickaction(this) id="14"></button></td>
		 <td><button onclick=clickaction(this) id="17"></button></td>
		 <td><button onclick=clickaction(this) id="20"></button></td>
		 <td><button onclick=clickaction(this) id="23"></button></td>
		 <td><button onclick=clickaction(this) id="26"></button></td>
		 <td><button onclick=clickaction(this) id="29"></button></td>
		 <td><button onclick=clickaction(this) id="32"></button></td>
		 <td><button onclick=clickaction(this) id="35"></button></td>
		 <td><button onclick=clickaction(this) id="2-2A1"></button></td>
			</tr>
			<tr>
				<td><button onclick=clickaction(this) id="1"></button></td>
				<td><button onclick=clickaction(this) id="4"></button></td>
				<td><button onclick=clickaction(this) id="7"></button></td>
				<td><button onclick=clickaction(this) id="10"></button></td>
				<td><button onclick=clickaction(this) id="13"></button></td>
				<td><button onclick=clickaction(this) id="16"></button></td>
				<td><button onclick=clickaction(this) id="19"></button></td>
				<td><button onclick=clickaction(this) id="22"></button></td>
				<td><button onclick=clickaction(this) id="25"></button></td>
				<td><button onclick=clickaction(this) id="28"></button></td>
				<td><button onclick=clickaction(this) id="31"></button></td>
				<td><button onclick=clickaction(this) id="34"></button></td>
				<td><button onclick=clickaction(this) id="1-2A1"></button></td>
			</tr>
			
		</table>
	
			<table class="tablero2" id ="tablero2">
				<tr>
					<td><button onclick=clickaction(this) id="PRIMEROS12"></button></td>
					<td><button onclick=clickaction(this) id="SEGUNDOS12"></button></td>
					<td><button onclick=clickaction(this) id="TERCEROS12"></button></td>
				</tr>
			</table> 
		
				<table class="tablero3" id ="tablero3">
					<tr>
						<td><button onclick=clickaction(this) id="1A18"></button></td>
						<td><button onclick=clickaction(this) id="PARES"></button></td>
						<td><button onclick=clickaction(this) id="ROJOS"></button></td>
						<td><button onclick=clickaction(this) id="NEGROS"></button></td>
						<td><button onclick=clickaction(this) id="IMPARES"></button></td>
						<td><button onclick=clickaction(this) id="19A36"></button></td>
					</tr>
				</table> 
	</div>
		<div class = "ventanaCompra" id="ventanaCompra" style="display: block;">CAJA
			<input type="button" class="boton100euro" value=""  onclick=clickaction(this) id="100€"/>
			<input type="button" class="boton200euro" value=""  onclick=clickaction(this) id="200€"/>
			<input type="button" class="boton500euro" value=""  onclick=clickaction(this) id="500€"/>
		</div>
	<div id="box">
		<p id="mensaje"></p>
	</div>
	<script src="../../js/dibujo.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/bouncebox-plugin/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../../js/bouncebox-plugin/jquery.bouncebox.1.0.js"></script>
	<script type="text/javascript" src="../../js/script.js"></script>	
</body>
</html>
<?php
//Para no permitir acceso a la pagina sin logearse
}else{
    echo "Acceso no autorizado";
}

?>