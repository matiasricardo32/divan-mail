<?php




        header('Content-type: application/json; charset=utf-8');

        if( isset($_POST['nombre'])  && isset( $_POST['email'])   && ($_POST['nombre'] != "")&& ($_POST['email'] != "") ) {
    
            include 'config.php';
            //////

            $email = $_POST['email'];  ////////
            $password = $_POST['password'];
            $nombre = $_POST['nombre']; //////////////////
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono']; //////////////////
            $cuil = $_POST['cuil'];
            $sexo = $_POST['sexo'];
            $ubicacion = $_POST['ubicacion'];

            //zona de preferencia
            $zonaCaba = $_POST['zonaCaba'];
            $zonaGbaN = $_POST['zonaGbaN'];
            $zonaGbaO = $_POST['zonaGbaO'];
            $zonaCord = $_POST['zonaCord'];

            //Titulo que posee
            $titulo = $_POST['titulo'];

            $tratamientoDomicilio = $_POST['tratamientoDom'];
            $profesion = $_POST['profesion'];
            $certificado = $_POST['imgCertificado'];

            //tipo de terapia
            $tipoPsicodrama = $_POST['tipoPsicodrama'];
            $tipoCognitiva = $_POST['tipoCognitiva'];
            $tipoPositiva = $_POST['tipoPositiva'];
            $tipoHumanista = $_POST['tipoHumanista'];

            // a quien va dirigido
            $dirigidoAdolescentes = $_POST['dirigidoAdolescentes'];
            $dirigidoAdultos = $_POST['dirigidoAdultos'];
            $dirigidoFamiliar = $_POST['dirigidoFamiliar'];
            $dirigidoMayores = $_POST['dirigidoMayores'];
            $dirigidoNiños = $_POST['dirigidoNiños'];
            $dirigidoPareja = $_POST['dirigidoPareja'];

            //modalidad de terapia
            $modalidadGrupal = $_POST['modalidadGrupal'];
            $modalidadIndividual = $_POST['modalidadIndividual'];


            //////
            //mail
            $contacto = false;
            $asunto_email = "Registro desde Divan";

            $email_message = "
            Detalles del formulario de contacto:\n\n
            email: $email \n
            nombre: $nombre, $apellido \n
            telefono: $telefono \n
            N° de Cuil/Cuit: $cuil \n
            sexo: $sexo \n
            ubicacion: $ubicacion \n
            zona de Trabajo: $zonaCaba, $zonaCord, $zonaGbaN, $zonaGbaO \n
            titulo: $titulo \n
            tratamiento a domisilio: $tratamientoDomicilio \n
            profesion: $profesion \n
            certificado: $certiificado \n
            Tipos de terapia : $tipoCognitiva, $tipoHumanista, $tipoPositiva, $tipoPsicodrama \n
            Va dirigido a: $dirigidoAdolescentes, $dirigidoAdultos, $dirigidoFamiliar, $dirigidoMayores, $dirigidoNiños, $dirigidoPareja \n
            Modalidad de terapia: $modalidadGrupal, $modalidadIndividual \n


            ";

                $adminEmail = 'ricardomatias.deb@gmail.com';

            // Ahora se envía el e-mail usando la función mail() de PHP
            $headers = "From: Divan Registros \r\n"
            ."Reply-To: ".$adminEmail."\r\n"
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



