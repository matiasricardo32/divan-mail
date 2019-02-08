<?php 

	header('Content-type: application/json; charset=utf-8');

	if( isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) && ($_POST['name'] != "")&& ($_POST['email'] != "")&& ($_POST['phone'] != "")&& ($_POST['message'] != "") ) {

		include 'config.php';

		$contacto = false;
		$nombre = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$mensaje = $_POST['message'];

   		$asunto_email = "Contacto desde ienpac.com.ar";

		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $nombre . "\n";
		$email_message .= "E-mail: " . $email . "\n";
		$email_message .= "Teléfono: " . $phone . "\n";
		$email_message .= "Mensaje: " . $mensaje . "\n\n";

		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = "From: ".$nombre." <".$email.">\r\n"
    	."Reply-To: ".$email."\r\n"
    	."X-Mailer: PHP/" . phpversion();
		$contacto = mail(WEBMASTER_EMAIL, $asunto_email, $email_message, $headers);
			
		if ($contacto) {
			echo '{"state":"ok","info":"<p class=\"text-success\">¡Mensaje Enviado!<br>"¡Gracias, pronto nos comunicaremos con usted!</p>"}';
		}
		else{
			echo '{"state":"error","info":"<p class="text-danger">Error al enviar mensaje!<br>Intente nuevamente.</p>"}';
		}
	}
	else{
		echo '{"state":"error","info":"<p class="text-danger">Complete los datos Faltantes</p>"}';
	}
?>
