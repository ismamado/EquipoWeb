
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
    $consulta = "INSERT INTO `softteci_paqueteria`.`PAQUETE` (`id_usuario`, `fecha_salida`, `tipo_envio`, `total_envio`, `destinatario`, `correo_destino`, `direccion_destino`, `estado_destino`,  `telefono_destino`, `correo_remitente`, `nombre_remitente`, `referencias`) 
    VALUES ('1', '$fecha', '$tipo_remitente', '$total_envio', '$nombre_destinatario', '$correo_destinatario', '$direccion_destinatario', '$estado_destinatario',  '$telefono_destino', '$correo_remitente', '$nombre_remitente', '$referencias_destinatario')";



 mysqli_query($conexion,$consulta) 
	or  die("Problemas en el select".mysqli_error($conexion));


 
if ($conexion) {

   $asunto = "Confirmación - Envio de paquete";
    $id = mysqli_insert_id($conexion);
 /* $cuerpo = "  
    HOLA $nombre_remitente! Con este correo confirmamos que realizaste un envio de paqueteria,  ¡Gracias por su compra! Su numero de Guia es: $id "  ;  */
   // $remitente = "FROM:". "envios@paqueteria.softtecisc.com";
    $remitente = 'MIME-Version: 1.0' . "\r\n";
                          $remitente .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $cuerpo = ' <html lang="es">
                             <head> <meta charset="UTF-8" /> </head>
                              <body>
                              HOLA '.$nombre_remitente.'! Con este correo te informamos que la solicitud para realizar tu envio ha sido aceptada. 
					   A continuación te brindamos el ID con el cual podrás rastrearlo '.$id.'
                              <br>Puedes consultar el estado de tu envio aquí: <br>
                                  <center><a href="https://www.paqueteria.softtecisc.com/crud/verificacion.php?id='.$id.'" target="Contenido" class="link"> <img src="https://cdn-icons-png.flaticon.com/512/6851/6851140.png" height=90px ></a> </center> <br>
                          <br> En dado caso de no reconocer esta acción ponerse en contacto con el soporte tecnico. <br>
                           ¡Gracias por su preferencia!
                          </html></body>
                              ';
    
    
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
<p> Hemos enviado un correo con la información de tu paquete</p>
<p2><b>Recuerda que puedes consultar el proceso de envio con tu numero de guía</b></p2><br>
        </div>
     
</body >
</html>

