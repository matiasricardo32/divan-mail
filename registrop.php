<?php
/**
 * Created by PhpStorm.
 * User: MatiasRicardo
 * Date: 2/2/2019
 * Time: 09:54
 */


use PHPMailer\PHPMailer\PHPMailer;

require './vendor/autoload.php';

// Campos de inputs
$email = $_POST['email'];
$constraseña = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$ubicacion = $_POST['ubicacion'];
$situacion = $_POST['situacion'];


// Mailer
$mail = new PHPMailer;
$mail->setFrom('ricardomatias.deb@gmail.com', 'Ricardo');
$mail->addAddress('matias.ricardo.m@gmail.com');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}






?>


