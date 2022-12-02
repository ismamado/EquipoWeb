
    <?php

$servername = "localhost";
$username = "softteci_paqueteria";
$password = "equipoweb1";
$dbname = "softteci_paqueteria";


    



$conexion=mysqli_connect($servername, $username, $password, $dbname);
    
$ID_GUIA= $_GET["id"];    
$Validacion = "Validado";
$query = "UPDATE `softteci_paqueteria`.`PAQUETE` SET validacion = '$Validacion' WHERE ID_GUIA='$rfc'";
$Resultado= mysqli_query($conexion,$query);

if($Resultado)
{ 
   echo '<html lang="es">
    <head>
        <meta charset="UTF-8">
	<title> SENDIT </title>
	</head>
	<body bgcolor= black > 
			
<br>
		<center><b> <font size=10 color= white face=arial> GRACIAS POR SU COMPRA! </font></b> </center>
       <center> <img src= https://i.pinimg.com/originals/d0/c8/7b/d0c87bc251511923ddebdf5f11df2a85.gif > </center>
       </br></br>
       


</body >
</html>';
}else
{
    echo "No validado";
    
}

       ?>