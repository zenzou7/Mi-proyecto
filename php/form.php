<?php
//Variables
$nombreApellido = $_POST['name']
$email = $_POST['email']
$ciudad = $_POST['ciudad']
$asunto = $_POST['asunto']
$mensaje = $_POST['mensaje']

//Cuerpo del mail a recibir
$mensaje = "Este mensaje fue enviado por " . $nombreApellido . ",\r\n";
$mensaje .= "Su email es " . $email . ",\r\n";
$mensaje .= "Desde la ciudad de " . $ciudad . ",\r\n";
$mensaje .= "Con asunto de  " . $asunto . ",\r\n";
$mensaje .= "Mensaje: " . $mensaje . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

//mail receptor
$para = 'leokkpo09@hotmail.com';
$asuntoMail = 'Mail enviado desde la web de RiseAgainst';

//funcion Mail
mail($para, $asuntoMail, utf8_decode($mensaje), $header);

//redireccion del form
header('Location:index.html');
?>