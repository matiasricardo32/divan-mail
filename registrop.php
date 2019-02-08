<?php
/**
 * Created by PhpStorm.
 * User: MatiasRicardo
 * Date: 2/2/2019
 * Time: 09:54
 */

$email = $_POST['email'];
$constraseña = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$ubicacion = $_POST['ubicacion'];
$situacion = $_POST['situacion'];


echo '<p>' . $email . '</p>';
echo '<p>' . $constraseña . '</p>';
echo '<p>' . $nombre . '</p>';
echo '<p>' . $apellido . '</p>';
echo '<p>' . $telefono . '</p>';
echo '<p>' . $ubicacion . '</p>';
echo '<p>' . $situacion . '</p>';


?>


