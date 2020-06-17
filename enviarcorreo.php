<?php //Recepción de datos al email 
$destinatario= 'oportunidadinmobiliaria.cl@gmail.com';
$nombre = $_POST['Nombre'];
$eMail= $_POST['eMail'];
$Phono=$_POST['Phono'];
$asunto=$_POST['Asunto'];
$consulta=$_POST['Mensaje'];

$header= "Enviado desde la web de oportunidad Inmobiliaria";
$mensajecompleto=$asunto. $consulta.
mail($destinatario,$nombre,$eMail,$Phono,$mensajecompleto);
mail($mensajecompleto)
//echo(imap_alerts('Correo enviado exitosamente, gracias') );
///echo "(socket_set_timeout(\"location.href='contact.html'\", 1500))"






// Fin de recpcion de datos
// Acción de envío
//---------//


?>