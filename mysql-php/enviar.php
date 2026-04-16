<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar</title>
</head>

<body>
<?php

require __DIR__ . '/config.php';

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$localidad=$_POST['localidad'];
$comentario=$_POST["comentario"];

$destino="mail@mail.com,mail2@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." Localidad: ".$localidad." Mensaje: ".$comentario;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}

$conexion = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT)
    or die('No se pudo conectar al servidor');
mysqli_set_charset($conexion, 'utf8mb4');


// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$localidad','$comentario')");

$consulta = mysqli_query($conexion, "INSERT INTO tabla (nombre,email,localidad,comentario)VALUES ( '$nombre','$email','$localidad','$comentario')") or die("No se pudo escribir en la Base de datos");



?>
</body>
</html>