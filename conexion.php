<?php

$conexion = mysqli_connect("localhost" , "softteci_paqueteria" ,"equipoweb","softteci_paqueteria") or die(mysql_error($mysqli));

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
                window.location= 'index.html'
    </script>";
     


    }
    catch(Exception $e){
      

     echo "<script>
                alert('Registro fallido');
                window.location= 'registro.html'
    </script>";

  
        
    }
    

}

?>