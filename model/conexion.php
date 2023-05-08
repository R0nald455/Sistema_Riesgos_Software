<?php 
$contrasena = "";
$usuario    = "root";
$nombre_bd  = "riesgos";

try {
	$bd = new PDO ('mysql:host=localhost:3307; dbname='.$nombre_bd, $usuario, $contrasena, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e) {
	echo "Hay algún problema con la conexión: ".$e->getMessage();
}
?>