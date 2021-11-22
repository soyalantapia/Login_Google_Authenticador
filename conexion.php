<?php
// ESTABLECEMOS LA CONEXION CON LA BASE DE DATOS "basededatos"

$conexion = new mysqli('localhost', 'root', '', 'witworks');
if ($conexion->connect_errno) {
    echo "ERROR al conectar con la DB.";
    exit;
}

?>