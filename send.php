<?php
$name = $_REQUEST['name'];
$sname = $_REQUEST['sname'];
$mail = $_REQUEST['mail'];
$tel = $_REQUEST['tel'];
$comment = $_REQUEST['comment'];


$to = "rbadeshko@gmail.com";
$subject = "catch form bottom ASK";
$message = "Nombre: " . $name . "\n" . "Apellidos: " . $sname . "\n" . "Email: " . $mail . "\n" . "Tel: " . $tel . "\n" . "Comment: " . $comment;


mail($to, $subject, $message, "From: rbadeshko@gmail.com\r\n");
?>
