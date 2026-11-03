<?php
$servidor = "localhost"; //servidor
$usuario = "root";//usuario
$password = "";//contraseña
$bd = "tienda_makeup";//nombre de la base de datos que se conecta

$conexion = new mysqli($servidor, $usuario, $password, $bd);
//junta las 4 variables de arriba para intentar abrir la conexión con mysql
if ($conexion->connect_error) {//por si algo sale mal. revisa si hubo un error al conectar.
    die("Error de conexión: " . $conexion->connect_error);//si detecta un error, la orden ⁠die()⁠ mata el proceso ahí mismo y muestra en la pantalla qué fue lo que falló.
}
?>