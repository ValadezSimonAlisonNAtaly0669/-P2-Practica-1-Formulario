<?php //Avisa al servidor que meñeiza php
session_start(); //abre o "busca" la memoria que el navegador tenía abierta del usuario.
session_destroy();//destruye y borra por completo todos los datos de la sesión guardada (como el apodo o el correo), para que la cuenta se cierre bien
header("Location: index.php"); //redirige automáticamente al usuario de regreso a la página principal (⁠index.php⁠), ya con la sesión cerrada
exit();//le dice al codigo que se detenga por completo
?>//etiquets de cierre