<?php
// Generamos el codigo qr y aqui nace la creacion del $secret

require_once 'conexion.php';
// Utilizamos una libreria para armar la parte de la autenticacion llamada PHPgangsta 
require_once 'PHPGangsta/GoogleAuthenticator.php';
session_start();

$ga = new PHPGangsta_GoogleAuthenticator();

// Declarando la llave secret
$secret = $ga->createSecret();
$usuario = $_SESSION["usuario"];

// actualizandola en la base de datos
$insertar = "UPDATE usuarios SET secret = '$secret' WHERE nombre = '$usuario'"; 
$resultado = mysqli_query($conexion,$insertar);

// Armando el codigo QR
$qr = $ga->getQRCodeGoogleUrl('Nombre la empresa', $secret);  //El nombre de la empresa aparecera como nombre en la app de google autenticador
// Mostrando el codigo QR

$myCode = $ga->getCode($secret);
$result = $ga->verifyCode($secret, $myCode, 3);    
//Fin del codigo de generacion del QR
?>  

<!-- Llamado de la hoja style, donde tenemos los estilos del sitio -->
<link rel=StyleSheet href=style.css type=text/css>
<body>
	<div class="login">
        <div class="login-screen">
            <div class="login-form" >
                <h1>Escanear codigo</h1>
                <?php echo '<img src="'. $qr.'" /><br />'; ?> <br>   <!--  Mostramos el codigo QR -->

                <form method="get" action="key.php"> <!--  Te manda a la pagina de Key.php donde te debes de validar -->
                    <input  class="btn btn-primary btn-large btn-block" type="submit" value="Ingresar Codigo">
                </form>

            </div>
        </div>
    <div>
</body>

