<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = 'Solicitud de servicio';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('ptoyectos@ygmperu.com', $asunto, $mensaje)){
		echo "Correo enviado";
                window.location.replace("../../Plantilla_1-YGM");
	} else {
            echo "El correo no se pudo enviar";
        }
 ?>