<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


$captcha;
if(isset($_POST['g-recaptcha-response'])){
   $captcha=$_POST['g-recaptcha-response'];}
   $secretKey = "";
   $ip = $_SERVER['REMOTE_ADDR'];
   $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
   $responseKeys = json_decode($response,true);
   if(intval($responseKeys["success"]) == 1) {
				
			if(isset($_POST["enviarSolicitud"]) && !empty($_POST["enviarSolicitud"])) {
				$nombre = $_POST['nombre'];
				$dni = $_POST['dni'];
				$calle = $_POST['calle'];
				$correo = $_POST['correo'];
				$tel= $_POST['tel'];                        
				$estudios = $_POST['estudios'];
				$ingles = $_POST['ingles'];
				$texto = $_POST['texto'];	
                          
				$mail = new PHPMailer;
				$mail->isSMTP();
				//$mail->SMTPDebug  = 2;
	
				$mail->Host = 'mail.correosaliente.com.ar';
				$mail->Username = 'contactoweb@servidorsaliente.com.ar';                 
				$mail->Password = '123456'; 

				$mail->SMTPSecure = 'tls';                              
				$mail->Port = 587;
				$mail->SMTPAuth = true;
				$mail->SMTPOptions = array('ssl' => 
						 array('verify_peer' => false, 
						 'verify_peer_name' => false,
						 'allow_self_signed' => true));
	
				$mail->setFrom('contactoweb@servidorsaliente.com.ar');
				$mail->addAddress('direccionedestino@destino.com', 'Contacto');
				$mail->Subject = 'Asunto';
	
				if (array_key_exists('fichero', $_FILES)) {
					if ($_FILES['fichero']['size'] < 2097152) {	
						$uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['fichero']['name']));
					if (move_uploaded_file($_FILES['fichero']['tmp_name'], $uploadfile)) {
						$mail->addAttachment($uploadfile, $_FILES['fichero']['name']); }}}
	
				$mail->isHTML(true);                                  
				$mail->Body    = '<H3>Ha Recibido una Solicitud de Empleo desde Sitio WEB</H3><BR>'.
								'<B>Nombre y Apellido</B> '.$nombre.' | <B>DNI:</B> '.$dni.'<BR>'.
								'<B>Datos de Contacto</B> Direccion: '.$calle.' | <B>Telefono: </B>'.$tel.'<BR>'.
								'<B>Direccion de Correo Electronico</B> '.$correo.'<BR>'.
								'<B>Formacion Academica</B> '.$estudios.'<BR>'.
								'<B>Nivel de Ingles</B> '.$ingles.'<BR>'.
								'<B>Mensaje</B><BR></K>'.$texto.'</K>';      
   	
				if ($mail->send()) 
					header("Location: http://www.home.com.ar");
				else
					echo "El Mensaje no pudo ser enviado";
				//echo 'Mailer Error: ' . $mail->ErrorInfo;
	   }
}
else
header("Location: http://www.home.com.ar");	
?>