<?php
//Creacion del codigo que nos da la app de aqui nos sirve para despues autenticar 

require_once 'PHPGangsta/GoogleAuthenticator.php';
require "conexion.php";  
session_start();

// Declaracion de la SESSION [usuario], donde guarda la sesion para utilizarlo
$usuario = $_SESSION["usuario"];


// Seleccionando la tabla usuarios 
$sql = "SELECT * FROM usuarios WHERE  nombre = '$usuario' ";
$result = mysqli_query($conexion, $sql);

while($mostrar=mysqli_fetch_array($result)) {
// La variable secret siendo declarada con la tabla secret - Su funcion es presentar el token a google y que vincule correctamente
$secret = $mostrar['secret'];
} 

// Un if para validar si el code ingreso y lo declaramos
if (isset($_POST['google_code'])) {
	$code = $_POST['google_code'];
	$ga = new PHPGangsta_GoogleAuthenticator();
	$result = $ga->verifyCode($secret, $code, 3);    
	echo $result;
}

?>
















