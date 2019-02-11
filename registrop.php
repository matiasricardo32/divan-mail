<?php
/**
 * Created by PhpStorm.
 * User: MatiasRicardo
 * Date: 2/2/2019
 * Time: 09:54
 */


 use PHPMailer\PHPMailer\PHPMailer;

 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';
 
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
$mail->isSMTP();
$mail->SMTPDebug  = 2;
$mail->Host = 'ricardomatias.deb@gmail.com';
$mail->Username = 'ricardomatias.deb@gmail.com';                 
$mail->Password = '441324as';
$mail->SMTPSecure = 'tls';                              
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPOptions = array('ssl' => 
        array('verify_peer' => false, 
        'verify_peer_name' => false,
        'allow_self_signed' => true));

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


