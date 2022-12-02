<?php

$conexion = mysqli_connect("localhost" , "softteci_paqueteria" ,"equipoweb1","softteci_paqueteria") or die(mysql_error($mysqli));

insertar($conexion);


function insertar($conexion){
    
    $User =  $_POST["user"];  
    $Passw =  $_POST["passw"];  
    $Email =  $_POST["email"];  
    
    $Nombre =  $_POST["nombre"];  
    $ApellidoPat =  $_POST["apellidopat"];  
    $ApellidoMat = 
    $_POST["apellidomat"];  
    $Direccion =  $_POST["direccion"];  
    $Telefono =  $_POST["telefono"];
    
    
    $consulta = "INSERT INTO `usuarios`(`usuario`, `password`, `email`, `nombre`, `apellidopat`, `apellidomat`, `direccion`, 
    `telefono`) VALUES 
    ('$User','$Passw','$Email','$Nombre','$ApellidoPat','$ApellidoMat','$Direccion','$Telefono')";
    
    try{
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
  

     echo "<script>
                alert('Registro Exitoso');
                window.location= 'login.html'
    </script>";
     


    }
    catch(Exception $e){
      

     echo "<script>
                alert('Registro fallido');
                window.location= 'registro.html'
    </script>";

  
        
    }
    

}

function insertapaquete($conexion) {
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
$Comentarios_destinatario =$_POST["referencias_destinatario"];
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

    $consulta =
    
}

?>