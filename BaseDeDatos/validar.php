<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include "conexion.inc.php";

$consulta="SELECT * FROM usuario where '$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($con,$consulta);

if($filas) {
	header("location:index.php");
}else{
	?>
	<?php
	include("../Paginas/indexInfo.php");
	?>
	<h1>ERROR EN LA AUTENTIFICACION</h1>
	<?php
}
mysqli_free_result($resultado);

?>