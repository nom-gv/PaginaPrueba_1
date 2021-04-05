<?php
include "conexion.inc.php";
print_r($resultado);
$despliegue = mysqli_fetch_array($resultado);
print_r($despliegue);
?>