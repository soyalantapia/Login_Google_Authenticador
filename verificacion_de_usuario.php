<?php
//Validamos al usuario si existe en la base de datos para poder seguir con el procedimiento

require_once "conexion.php";
session_start();

// isset() del boton login
if(isset($_POST['login'])){

    // Variables $_POST[]
    $usuario = $_POST['usuario'];
    $clave =$_POST['clave']; 

    if($usuario == "" || $_POST['clave'] == null){ // Validamos que ningún campo quede vacío
        header('location:index.php'); 
    }else{
        $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND clave = '$clave'";
        if(!$consulta = $conexion->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{
            $filas = mysqli_num_rows($consulta);
            // Comparo cantidad de registros encontrados
            if($filas == 0){ 
                header('location:index.php?fallo=true'); 
            }else{
                session_start();
                $_SESSION["usuario"] = $usuario; 
                header('location:key.php'); // Si está todo correcto redirigimos a otra página
            }

        }
    }
}

?>