<?php
//Formulario de autenticacion mas la validacion del $code que se armo en login.php

session_start(); //Mantenmos la sesion activa
$usuario = $_SESSION["usuario"]; //Declaramos la variable usuario con la sesion creada.
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creacion de un login con proteccion de Google Authenticador">
    <meta name="author" content="Alan Naim Tapia">
    <title>Login con Google authenticator</title>
    <link rel=StyleSheet href=style.css type=text/css>
</head>


<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h2>COMPROBACION DE AUTENTICACION</h2>
			</div>
            <!-- Formulario para ingresar el codigo que nos proporciona la app -->
			<div class="login-form" >
                    <div class="control-group" id="login_form">
                    <input type="text" class="login-field" id="google_code" placeholder="CODIGO" id="login-name"> <br><br>
                    <input  class="btn btn-primary btn-large btn-block" type="submit" id="submit_code">
                    </div>
                </div>
                <!-- Boton para generar el codigo qr -->
                <form method="get" action="generate.php">
                <input  class="btn btn-primary btn-large btn-block" type="submit" value="Generar Codigo">
                </form>
			</div>
		</div>
	</div>
</body>



<!-- Funcion para validar el $code que activamos en login.php -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $('input#submit_code').on('click', function() {
        var google_code = $('input#google_code').val();
        if (google_code.length > 4){
            $.post('login.php', {google_code : google_code}, function(result){
                if (result == 1){
                    $('div#login_status').text('CODIGO CORRECTO');
                    $('div#login_form').hide();
                    location.replace("plataforma.php")
                } else {
                    $('div#login_status').text('CODIGO INCORRECTO');
                }
            });
        }  
    });
    </script>