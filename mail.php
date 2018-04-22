<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Mensaje de Interesado\n\nDe: $name \nEmail:$email \nMensaje: $message";
$recipient = "eduardo.rasgado@beemsites.com";
$subject = "Beemsites Interesado: $name";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: https://beemsites.com/index.html");
die();

?>
