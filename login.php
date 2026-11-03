<?php
include("conexion.php");//llama al archivo de conexión para poder conectarse a mysql y guardar los datos

$mensaje = "";//crea una variable vacía para guardar el mensaje flotante (verde si se registró bien o rojo si falló)

if ($_SERVER["REQUEST_METHOD"] == "POST") {//es un ⁠if⁠ que revisa si el usuario le dio clic al botón de enviar del formulario.
    $apodo = $_POST['apodo'];//atrapa lo que la persona escribió
    $correo = $_POST['correo'];//atrapa lo que la persona escribió
    $password = $_POST['password'];//atrapa lo que la persona escribió

    $sql = "INSERT INTO usuarios (correo, password, apodo) VALUES ('$correo', '$password', '$apodo')";
//es la orden en lenguaje sql que dice: "guarda en la tabla ⁠usuarios⁠ este correo, esta contraseña y este apodo"
    if ($conexion->query($sql) === TRUE) {// le manda la orden a mysql y revisa si los datos se guardaron con éxito.
        $mensaje = "<p style='color: green;'>¡Registro exitoso! Ahora inicia sesión con Google.</p>";//si todo salió bien, guarda un mensaje en texto verde indicando que el registro fue exitoso.
    } else {//si algo falló, guarda un mensaje de aviso en texto rojo.
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
<!-- abre y cierra el bloque de php directamente dentro del codigo html. -->
<!-- Es la orden en php que significa "imprimir", "mostrar" o "escribir en la pantalla". -->
<!-- Es la variable que esta arriba. -->


		<button class="btn-shop">Continue with shop</button>

		<a href="login_google.php">
			<button type="button" class="btn-google">
				<b>G</b> Continue with Google
			</button>
		</a>

		<p class="divisor"><span>or (Registrarse)</span></p>
<!--crea un párrafo ⁠<p>⁠ y le asigna la clase ⁠divisor⁠ para que tome el estilo de la línea gris horizontal-->
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