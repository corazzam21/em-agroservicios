<?php
require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();
$remitente = $_POST['email'];
//Configuracion servidor mail
$mail->From = ""; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='marianojesuscorazza@gmail.com'; //nombre usuario
$mail->Password = 'Corazzam250793'; //contraseña
//Agregar destinatario
$mail->AddAddress("marianojesuscorazza@gmail.com");
$mail->Subject = $_POST['subject'];
$body = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email']; 
$mail->Body = " Nombre : " . $name . "\n Mensaje : " .$body ."\n Correo electronico : " .$email  ;

//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    echo true;
} else {
    echo false;
}
?>