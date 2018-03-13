
  <?php
		$nombre = $_POST['nombre'];
		$email  = $_POST['email'];
		$telefono = $_POST['telefono'];
		$mensaje = $_POST['mensaje'];

		
		$destinatario = "burlonaclothing@gmail.com";
		$asunto = "Formulario desde web";
		

		$cuerpo = "$nombre te envío el formulario, contactalo a su mail $email Su mensaje es: $mensaje ";
		
		
		$cabeceras = "From: Burlona <burlonaclothingl@gmail.com>";

		echo "Mensaje enviado: $cuerpo . ";
		
		mail($destinatario,
			 $asunto,
			 $cuerpo,
			 $cabeceras);
		
		
	?>
	