
<!-- ULTIMA PAGINA DONDE EL USUARIO YA INGRESO AL SISTEMA DE FORMA CORRECTA -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creacion de un login con proteccion de Google Authenticador">
    <meta name="author" content="Alan Naim Tapia">
    <title>Login con Google authenticator</title>
    <link rel=StyleSheet href=style.plataforma.css type=text/css>
</head>
<body>
    <!-- Creacion del muñeco -->
    <div class="face">
        <div class="band">
            <div class="red"></div>
            <div class="white"></div>
            <div class="blue"></div>
        </div>

        <div class="eyes"></div>
        <div class="dimples"></div>
        <div class="mouth"></div>
    </div>

    <h1>Bienvenido a la plataforma!</h1>
        <h2> Si llegaste hasta aqui significa que pudiste pasar por los controles de valides de usuario de GoogleAuthenticator</h2>

    <div id="button">
        <form method="get" action="salir.php">
            <button class="btn" type="submit">Cerrar Sesion </button>
        </form>
    </div>
</body>