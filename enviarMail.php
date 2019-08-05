<?php
  $to = "emma@inkwonders.com";

  $subject = "Contacto desde la página web de SEÑOR SABOR";

  $message = "<html>
  			<head>
  				<title>Contacto desde la página web de SEÑOR SABOR</title>
  			</head>
  			<body style='padding:0; margin:0; font-family:Arial, Helvetica, sans-serif; color:#000; font-size:12px'>
  				<table style='border:2px solid #e2231a; padding:10px;' cellpadding='0' cellspacing='0'>
  				<tr>
  					<td align='left' style='color:#000'>
    					Te han contactado con el formulario de SEÑOR SABOR<br /><br />
    					<b>Nombre:</b> " . $_POST["txtNombre"] . "<br>
    					<b>Correo: </b> ". $_POST["txtCorreo"] . "<br>
    					<b>Mensaje:</b> " . $_POST["txtMensaje"] . "
  					</td>
  				</tr>
  				</table>
  			</body>
  		</html>";

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: SEÑOR SABOR <contacto@senorsabor.com>' . "\r\n";

  if(mail($to,$subject,$message,$headers)){
?>
  <div class="success">
    El formulario ha sido enviado correctamente.<br />
    Nos pondremos en contacto a la brevedad posible.
  </div>
<?php
}else{
?>
  <div class="success">
    Algo salio mal
  </div>
<?php
}
?>
