<?php
	$destino= "24dael@gmail.com";
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$edad = $_POST["edad"];
	$dia_nacimiento = $_POST["dia_nacimiento"];
	$mes_nacimiento = $_POST["mes_nacimiento"];
	$sexo = $_POST["sexo"];
	$experiencia = $_POST["experiencia"];
	$modalidad = $_POST["modalidad"];
	$contenido = "Nombre: " . $nombre . "\nApellidos: " . $apellidos . "\nEmail: " . $email . "\nTeléfono: " . $telefono . "\nEdad: " . $edad . "\nDía de nacimiento: " . $dia_nacimiento . "\nMes de nacimiento: " . $mes_nacimiento . "\nSexo: " . $sexo . "\nExperiencia: " . $experiencia . "\nModalidad: " . $modalidad;
	mail($destino,"Formulario",$contenido);
	header("Location:inscripción.html");
?>
