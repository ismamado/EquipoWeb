
    <?php
date_default_timezone_set('Mexico/General');

    
$conexion=mysqli_connect("localhost" , "softteci_paqueteria" ,"equipoweb1","softteci_paqueteria");
if ($conexion) {
echo " <script > alert ('Su compra se esta procesando...') </script>";      
}
else {
    echo " <script > alert ('No hay conexion a la base') </script>";  
    
}



   /* REMITENTE */
    $nombre_remitente= $_POST["nombre_remitente"];
    $tipo_remitente =$_POST["tipo_remitente"];
    $correo_remitente = $_POST["correo_remitente"];
 
/* DESTINATARIO */
$nombre_destinatario= $_POST["nombre_destinatario"];
$estado_destinatario =$_POST["estado_destinatario"];
$direccion_destinatario =$_POST["direccion_destinatario"];
$referencias_destinatario =$_POST["referencias_destinatario"];
$correo_destinatario = $_POST["correo_destinatario"];
$telefono_destino = $_POST["telefono_destinatario"];
$total_envio=0;

    if ($tipo_remitente == "Estandar") {
$total_envio = 130;
}
else if 
  ($tipo_remitente == "Express") {
$total_envio = 220;
}  
else  {
$total_envio = 300;
}
$fecha =  date('Y-n-d');
    $consulta = "INSERT INTO `softteci_paqueteria`.`envios` (`id_usuario`, `fecha_salida`, `tipo_envio`, `total_envio`, `destinatario`, `correo_destino`, `direccion_destino`, `estado_destino`,  `telefono_destino`, `correo_remitente`, `nombre_remitente`, `referencias`) 
    VALUES ('1', '$fecha', '$tipo_remitente', '$total_envio', '$nombre_destinatario', '$correo_destinatario', '$direccion_destinatario', '$estado_destinatario',  '$telefono_destino', '$correo_remitente', '$nombre_remitente', '$referencias_destinatario')";



 mysqli_query($conexion,$consulta) 
	or  die("Problemas en el select".mysqli_error($conexion));


 
if ($conexion) {

    $asunto = "Confirmación de compra";
    $cuerpo = "  
    HOLA $nombre_remitente! Con este correo confirmamos que realizaste un envio de paqueteria,  ¡Gracias por su compra!
    ";  
    $remitente = "SENDIT. <envios@paqueteria.softtecisc.com>";
mail ($correo_remitente,$asunto,$cuerpo,$remitente);   
echo " <script > alert ('¡Compra exitosa!') </script>";      

} else {
  echo " <script > alert ('No recibira notificaciones') </script>"; 
  }

mysqli_close($conexion);

 ?>
    
<!DOCTYPE html>
<html lang="es"> 
<head>
<link rel = "stylesheet" type="text/css" href="estilos.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bayon&family=League+Spartan&display=swap" rel="stylesheet">
	</head>
	<body> 
<div class = "graciascompra" >		
<h1> Gracias por preferir SENDIT para tus envios. </h1>
<p> ¿Deseas recibir un correo donde te proporcionaremos la información de tu paquete? </p>
<p2><b> Recuerda que igualmente accediento a la sección de 'Pedidos' puedes visualizar la información. </b><p2><br>

 <input type="radio" value="true" name="recibircorreo">Si 
 <input type="radio" value="false" name="recibircorreo"> No <br>
 <button>Siguiente</button>
</class>	
</body >
</html>

