
  <?php
	
		$nombre = $_POST['nombre'];
		$email  = $_POST['email'];
		$telefono = $_POST['telefono']
		$mensaje = $_POST['mensaje'];
		$destinatario = "natalia.lazcano987@gmail.com";
		$asunto = "Formulario desde web";
		
	
		$cuerpo = "Nombre: " . $nombre "email:" . $email . "telefono:" . $telefono . "mensaje:" .  $mensaje";
		
		$cabeceras = "From: Burlona <burlonaclothingl@gmail.com>";
		
		mail($destinatario,
			 $asunto,
			 $cuerpo,
			 $cabeceras);
		
		
	?>
	