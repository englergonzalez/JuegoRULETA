<?php
require_once('../model/UserModel.php');
require_once('../controller/UserController.php');

session_start();
if (isset($_SESSION['use'])) {
    $use = unserialize($_SESSION['use']);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="../../css/index.css">
    
    <!-- colocar icono en la barra-->
    <link rel="stylesheet icon" href="../../images/Logo-miniaturaR.png" type="image/png">
    
    <title>RULETA HAZE - MENÚ</title>
</head>
<body>
    <header class="header">

    <!-- logo -->
    <figure class="header-brand">
        <img src="../../images/LogoR.png" alt="logo de la empresa">
    </figure>
    <!-- menu -->
    <nav class="header-menu">
    <ol> 
        <li><h2><a href="../../index.php">Cerrar Sesion</a></h2></li>
    </ol>
    </nav>
    </header>
    <!--Cuerpo de la pagina  -->
    <main>
    <section class="content3">
    <div class="contenedor-form">
    <div class="form-menu">
        <div class="formulario">
        <div class="toggle">
            <span>Perfil</span>
        </div>
        <h1 class="form-title">MENÚ<br><br><br><br></h1>
             
            <button type="submit" class="form-button2" id="btn-abrir-popup" >Manual</button><br><br><br>
            <button type="submit" class="form-button2" id="btn-abrir-popup2">Consejos</button><br><br><br>
            
        </div>
        <div class="formulario">
        <div class="toggle">
            <span>Ayuda</span>
        </div>
        <h1></h1>
        <p class="form-title-bienvenido">BIENVENIDO(A)<br><br> <br><br><b><?php  echo strtoupper("".$use->getNom_use()." ".$use->getApe_use(). "<br>Usuario: ".$use->getLog_use(). "<br>" ) ?></b></p>
        <br><br><br>
        <form action="JuegoRULETA.php" method="post">
                <input type="submit" value="Jugar">
            </form><br><br>
        <form action="login.php" method="post">
            
                <input type="submit" value="Salir">
            </form>
        </div>
    </div>
    <div class="reset-password">
        </div>
    </div>
    </section>
    </main>
    <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h3>Manual de usuario</h3>
                <form action="">
                    <div class="contenedor-inputs">
                        <h4>
                        <p class="centrar-letra"><b>Aqui tienes todo lo que necesitas saber para jugar.</b></p>
                        <br>
                        <b>En qué consiste el Juego:</b> El juego consiste básicamente en seleccionar el monto de dinero con el que se desea iniciar, luego seleccionar una de las tres fichas opcionales para apostar, después elegir uno de los 38 números u otras opciones presentes en el tablero para finalmente presionar el botón jugar. Una vez iniciado el juego se mostrará una pequeña animación de la ruleta girando, cuando la ruleta deja de girar, la casilla se detiene, indica el número ganador de la apuesta.
                        <br><br>El juego contará con tres tipos de fichas, la cual cada ficha contará con un valor y un color diferente, los valores y los colores de las fichas son los siguientes:
                        <br><br>
                        <b>Ficha rosa: valor 10 y equivale a 10 euro.<br>Ficha verde: valor 50 y equivale a 50 euros.<br>Ficha azul: valor 20 y equivale a 20 euros.</b>
                        </h4>  
                    </div>
                </form>
            </div>
        </div>
        <div class="overlay" id="overlay2">
            <div class="popup" id="popup2">
                <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h3>Posibilidades con las cuales se puede apostar y ganar en la ruleta.</h3>
                <form action="">
                    <div class="contenedor-inputs">
                        <h4>
                        <p class="centrar-letra"><b>Aqui tienes algunas jugadas que debes tener en cuenta.</b></p>
                        <br>
                        <b>Pleno o número completo:</b> Consiste en la apuesta a uno de los 36 números disponibles a excepción del 0 y 00, el pago de esta apuesta corresponde a 35 veces la postura.
                        <br><br>
                        <b>La docena:</b> Como su nombre lo indica este tipo de apuesta abarca 12 números, la primera docena son los números que van del 1 al 12, la segunda docena son los números que van del 13 al 24 y la tercera docena son los números que van del 25 al 36, el pago por la docena es de 2 veces la postura.
                        <br><br>
                        <b>Columna:</b> cuenta con una columna entera y se coloca en la casilla de "2-1" al final de una columna, el pago de esta apuesta corresponde a 2 veces su postura.
                        <br><br>
                        <b>Apuesta sobre colores:</b> cuenta con todos los números rojos o todos los números negros en el paño y se coloca en la casilla de "Rojo" (Todos los números rojos) o en la de "Negro" (todos los números negros), el pago a esta apuesta corresponde a 1 vez su postura.
                        <br><br>
                        <b>Par/Impar:</b> cuenta con todos los números pares o todos los números impares en el paño y las fichas se colocan en la casilla "Par" (todos los números pares) o en la de "impar" (todos los números impares), el pago de esta apuesta corresponde a 1 vez su postura.
                        <br><br>
                        <b>Pasa/Falta:</b> Cuenta con todos los números bajos o todos los números altos, las fichas se colocan en la casilla de "Falta" (números de 1 a 18) o en la de "Pasa" (números del 19 al 36), el pago de esta apuesta corresponde a 1 vez su postura.
                        </h4>  
                    </div>
                </form>
            </div>
        </div>
    <script src="../../js/jquery-3.1.1.min.js"></script>
    <script src="../../js/main.js"></script>                     
    <script src="../../js/popup.js"></script>  
     
</div>  
</div> 
</body>
</html>
<?php
//Para no permitir acceso a la pagina sin logearse
}else{
    echo "Acceso no autorizado";
}
?>