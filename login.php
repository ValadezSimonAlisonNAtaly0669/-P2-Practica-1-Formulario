<?php
include("conexion.php");

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apodo = $_POST['apodo'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuarios (correo, password, apodo) VALUES ('$correo', '$password', '$apodo')";

    if ($conexion->query($sql) === TRUE) {
        $mensaje = "<p style='color: green;'>¡Registro exitoso! Ahora inicia sesión con Google.</p>";
    } else {
        $mensaje = "<p style='color: red;'>El correo ya está registrado.</p>";
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

		<h1>Sign in</h1>
		<p class="subtitulo">Sign in or create an account</p>

		<?php echo $mensaje; ?>

		<button class="btn-shop">Continue with shop</button>

		<a href="login_google.php">
			<button type="button" class="btn-google">
				<b>G</b> Continue with Google
			</button>
		</a>

		<p class="divisor"><span>or (Registrarse)</span></p>

		<!--r -->
		<form action="login.php" method="POST">
			<input type="text" name="apodo" placeholder="Apodo corto" required>
			<br><br>
			<input type="email" name="correo" placeholder="Email" required>
			<br><br>
			<input type="password" name="password" placeholder="Password" required>
			<br><br>

			<label>
				<input type="checkbox" checked> Email me with news and offers
			</label>
			<br><br>

			<button type="submit" class="btn-login-enviar">Registrarse →</button>
		</form>
		<br><br>
		<p class="texto-chico">By continuing, you agree to our <u>Terms of service</u></p>
		<p class="texto-chico"><a href="#" style="color: #e89ba5;">Privacy policy</a></p>
		<br>
		<a href="index.php">← Volver a la tienda</a>
	</div>
</body>
</html>