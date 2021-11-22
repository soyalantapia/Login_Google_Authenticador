<?php
// EN ESTA PAGINA SALIMOS DE LA SESION PARA PODER VOLVER A INDEX.PHP Y EL FORMULARIO DE INGRESO


session_start();
session_destroy();

header("Location: index.php");

exit();


?>