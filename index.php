<?php //abre la "memoria" del navegador para revisar los datos de la sesión del usuario.
session_start();//es un ⁠if⁠ que pregunta: "¿existe o está guardado el apodo en la sesión?
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
<body>

	<div class="barrita" align="center">
		< Celebrate 10 Years with BOGO! <u>SHOP NOW</u> >
	</div>

	<header>
		<div align="left" style="float: left;">
			<button>MEXICO (USD $) ∨</button>
		</div>
		<!-- para que muestre el apodo, yea-->
		<!-- 2: Si el ⁠if⁠ dice que sí existe (o sea, ya inició sesión), muestra el emoji de la persona y con ⁠echo⁠ imprime su apodo en la pantalla.-->
  <!-- 3: ⁠<a href="cerrar_sesion.php"><button>Salir</button></a>⁠: al lado de su apodo le pone un botón que dice "Salir" para mandar llamar al archivo que borra la sesión.-->
  <!-- 4: else: si el if dice que no existe... -->
		<!-- 5: <a href="login.php"><button>Acceder</button></a>⁠: ...en lugar de mostrar su nombre, le pone el botón que dice "Acceder" para mandarlo a la pantalla de inicio de sesión-->
  <!-- 6: endif; ?>⁠: marca el final de toda esa condición del ⁠if-->
		<div align="right">
			<?php if (isset($_SESSION['apodo'])): ?> 
				<span>👤 <?php echo $_SESSION['apodo']; ?></span>
				<a href="cerrar_sesion.php"><button>Salir</button></a>
			<?php else: ?>
				<a href="login.php"><button>Acceder</button></a>
			<?php endif; ?>
		</div>

		<div align="center">
			<img src="fk.png" alt="Flower Knows logo" width="150" height="120">
		</div>
	</header>

	<ul>
		<li><a href="index.php">TODOS LOS PRODUCTOS</a></li>
		<li><a href="#">NUEVO</a></li>		
		<li><a href="#">COLECCIONES</a></li>	  
		<li><a href="#">REGALOS</a></li>
		<li><a href="#">REBAJAS</a></li>
	</ul>

	<h2 align="center">Todos Los Productos</h2>

	<table align="center" class="tabla-productos">
		<tr>
			<td>
				<img src="labial.png" width="200">
				<p>Swan Ballet Shine Lipstick</p>
				<p><b>$20.00</b></p>
				<img src="labialf.png" width="120">
			</td>
			<td>
				<img src="labialc.png" width="200">
				<p>Strawberry Rococo Cloud Lip Cream</p>
				<p><b>$14.00</b></p>
				<img src="lipcf.png" width="120">
			</td>
			<td>
				<img src="iluminador.png" width="200">
				<p>Little Angel Embossed Highlighter</p>
				<p><b>$30.00</b></p>
				<img src="iluminadorf.png" width="120">
			</td>
			<td>
				<img src="gloss.png" width="200">
				<p>Violet Strawberry Rococo Glowy Lip Gloss</p>
				<p><b>$20.00</b></p>
				<img src="glossf.png" width="120">
			</td>
		</tr>
		<tr>
			<td>
				<img src="cremalab.png" width="200">
				<p>Strawberry Cupid Cake Lip Cream</p>
				<p><b>$18.00</b></p>
				<img src="cremf.png" width="120">
			</td>
			<td>
				<img src="blush.png" width="200">
				<p>Little Angel Cream Blush</p>
				<p><b>$26.00</b></p>
				<img src="blushf.png" width="120">
			</td>
			<td>
				<img src="sombras.png" width="200">
				<p>Little Angel 9-Color Eyeshadow Palette</p>
				<p><b>$45.00</b></p>
				<img src="paleta.png" width="120">
			</td>
			<td>
				<img src="glaze.png" width="200">
				<p>Shell's Jewel Nourishing Lip Glaze</p>
				<p><b>$16.00</b></p>
				<img src="glazef.png" width="120">
			</td>
		</tr>
	</table>

	<footer>
		<table width="100%">
			<tr>
				<td align="left" valign="top">
					<b>ABOUT FLOWER KNOWS</b>
					<p>Loyalty Program</p>
					<p>Brand Story</p>
					<p>Blog</p>
					<p>Store Locator</p>
					<p>Affiliate Program</p>
					<p>Become a Retailer</p>
					<p>Global Flagship Store</p>
				</td>

				<td align="left" valign="top">
					<b>CUSTOMER CARE</b>
					<p>Shipping Policy</p>
					<p>Refund & Return Policy</p>
					<p>Promotion Terms & Conditions</p>
					<p>Privacy Policy</p>
					<p>Terms and Conditions</p>
				</td>

				<td align="left" valign="top">
					<b>CUSTOMER SERVICE</b>
					<p>Student Discount</p>
					<p>Track Your Order</p>
					<p>Help Center</p>
					<p>Submit a Fake</p>
				</td>
			</tr>
		</table>

		<br>
		<p align="center">Alison Nataly Valadez Simon | 5i | 0669</p>
	</footer>

</body>
</html>