<?php
//Primer pagina del sistema donde se manda los datos a validacion
require_once "conexion.php";

//Si en la URL aparece la palabra "Fallo" significa que hubo un error tiene que aparecer el error de "echo"
if(isset($_GET["fallo"]) && $_GET["fallo"] === 'true')
{
echo "<div style='color:red'>Usuario o contraseña invalido </div> <br>";
}
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
    <!-- Formulario de inicio de sesion -->
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Iniciar Sesion</h1>
			</div>
            <form method="post" id= 'formulario' action="verificacion_de_usuario.php">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" name="usuario" value="" placeholder="usuario" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="control-group">
                        <input type="password" name = "clave" class="login-field" value="" placeholder="clave" id="login-pass">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <div id='error'> </div>
                    <input  class="btn btn-primary btn-large btn-block" type="submit" name="login" value="Ingresar">
                   
                </div>
            </form>
		</div>
	</div>
</body>
</html>

