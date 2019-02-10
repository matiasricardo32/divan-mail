<?php
/**
 * Created by PhpStorm.
 * User: MatiasRicardo
 * Date: 2/2/2019
 * Time: 09:54
 */


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';


// Campos de inputs
$email = $_POST['email'];
$constraseña = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$ubicacion = $_POST['ubicacion'];
$situacion = $_POST['situacion'];


// Mailer
$mail = new PHPMailer();
$body = " El Paciente Registrado es... \n
        Nombre y apellido: $nombre, $apellido. \n
        Telefono: $telefono. \n
        Ubicacion: $ubicacion. \n
        Situacion: $situacion. \n
        Email: $email. \n
        Contraseña: $contraseña. \n";
$mail->SetFrom($email, 'Ricardo Mascareño');
$mail->AddReplyTo('ricardomatias.deb@gmail.com', 'Ricardo Mascareño');
$address = 'matias.ricardo.m@gmail.com';
$mail->AddAddress($address, 'Rick matias');
//$mail->Subject("Registro Paciente DIVAN");
//$mail­->CharSet("UTF­8");
//$mail-­>Encoding("quoted­printable");

if(!mail>Send()) {
    echo 'Error al Enviar mensaje: ' . $mail>ErrorInfo;
} else {
    echo " Hola, Su mensaje ah sido enviado";
}







?>


