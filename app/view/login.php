<?php
require_once('../controller/UserController.php');
require_once('../model/UserModel.php');
//Login
if (isset($_POST['user']) && isset($_POST['password'])) {
    
    $cuse = new UserController();

    $find = $cuse->login($_POST['user'], $_POST['password']);

    if ($find == true){
        session_start();
        $_SESSION['use'] = serialize ($cuse->use);

        header('Location: WelcomeUserView.php');
    }
}  
//Registro
if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['user']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['cel']) && isset($_POST['document'])) {

    $cuse = new UserController();
    $use = new UserModel(0, $_POST['user'], $_POST['password'], $_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['cel'], $_POST['document']);

    $result = $cuse->addUser($use);
    if ($result == true){
        header('Location: login.php');
    }
}   

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="../../css/inicio.css">
    <link rel="stylesheet icon" href="../../images/Logo-miniaturaR.png" type="image/png">
    <title>RULETA HAZE - LOGIN</title>
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
			<li><h2><a href="../../index.php">Menú principal</a></h2></li>
		  </ol>
		</nav>
    </header>
    <div class="contenedor-form">
        <div class="toggle">
            <span></span>
        </div>

        <div class="formulario">
        
            <h2>Iniciar Sesión</h2>
            
            <form action="login.php" method="post">
            <div class="toggle">
                <span>Crear Cuenta</span>
            </div>
            <div class="form-error">
                    <?php
                        if (isset($find)) {
                            if ($find == false) {
                                echo 'Usuario o contraseña incorrecta <br><br> '.$cuse->men.'';
                            }
                        }
                    ?>
                </div>
                <input class="form-text" type="text" placeholder="Usuario" name="user" required>
                <input class="form-text" type="password" placeholder="Contraseña" name="password" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        
        <div class="formulario">
        
            <h2>Crea tu Cuenta</h2>
            <form action="login.php" method="post">
            <div class="toggle">
                <span>Iniciar Sesion</span>
            </div>
                    <input class="form-text" type="text" placeholder="Nombre" name="name" required>
                    <input class="form-text" type="text" placeholder="Apellido" name="lastname" required>
                    <input class="form-text" type="text" placeholder="Usuario" name="user" required>
                    <input class="form-text" type="password" placeholder="Contraseña" name="password" required>
                    <input class="form-text" type="email" placeholder="Correo Electronico" name="email" required>
                    <input class="form-text" type="text" placeholder="Numero Celular/Telefonico" name="cel" required>
                    <input class="form-text" type="text" placeholder="Documento de Identidad" name="document" required>
                    <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                    <!--p>¿Ya tienes una cuenta? <b><a class="form-link" href="login.php">Iniciar sesión</a></b></p-->
                    <input type="submit" value="Registrarse">
            </form>
        </div>
        <div class="reset-password">
        </div>
    </div>
    <script src="../../js/jquery-3.1.1.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>