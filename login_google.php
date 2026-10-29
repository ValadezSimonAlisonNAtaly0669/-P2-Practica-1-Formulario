<?php
session_start();
include("conexion.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apodo = $_POST['apodo'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password' AND apodo='$apodo'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $_SESSION['apodo'] = $apodo;
        header("Location: index.php");
        exit();
    } else {
        $error = "<p style='color: red;'>Datos incorrectos o no estás registrado.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body class="body-login">

	<div align="center" class="caja-login">
		<img src="fk.png" width="150">

		<h1>Iniciar Sesión con Google</h1>
		<p class="subtitulo">Ingresa tus datos para acceder</p>

		<?php echo $error; ?>

		<form action="login_google.php" method="POST">
			<input type="text" name="apodo" placeholder="Tu apodo" required>
			<br><br>
			<input type="email" name="correo" placeholder="Correo electrónico" required>
			<br><br>
			<input type="password" name="password" placeholder="Contraseña" required>
			<br><br>

			<button type="submit" class="btn-login-enviar">Entrar →</button>
		</form>

		<br><br>
		<a href="login.php">← Volver</a>
	</div>

</body>
</html>