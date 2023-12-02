<?php 
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Email: $email";


	if(mail('albertogarciagomez18@gmail.com', $asunto)){
		echo "Correo enviado";
	}
 ?>