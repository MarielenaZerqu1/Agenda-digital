<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt>
	<script src="https://kit.fontawesome.com/2d9235d257.js" crossorigin="anonymous"></script>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="Assets/CSS/style.css">

	<title>Iniciar Sesion</title>

</head>
<body>
	<div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a Agenda Digital</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" method="post" novalidate>
            <h2 class="create-account">Crear una cuenta</h2>
            <input type="text" placeholder="Nombre" name="nombre">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Contraseña" name="clave">
            <input type="submit" name="add" value="Registrarse">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Contraseña">
            <input type="button" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
<?php
include "registro.php";
include "db.php";
?>

<script type="Assets/JS/main.js"></script>
</body>
</html>