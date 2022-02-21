<?php
$name = $_POST ['name'];
$mail = $_POST ['mail'];
$message = $_POST ['textarea'];

$email_from = "feriaverdedistrital@yahoo.com.ar";

$email_subject = "Nuevo Informe";

$email_body = "User Name: $name.\n".
               "User Email: $mail.\n".
               "User Message: $message.\n";
               
$to = "danifer001@hotmail.com";

$header = "From $email_from\r\n";

$header .= "Reply-Tl $mail\r\n.";

mail($to,$email_subject,$email_body,$header);

header ("Location: formulario.html");

?>
