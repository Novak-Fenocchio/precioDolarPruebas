<?php
$mail = $_POST['email'];
$contenidoEmail = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'fenomartin6@gmail.com';
$asunto = 'Mensaje para precioDolar';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
