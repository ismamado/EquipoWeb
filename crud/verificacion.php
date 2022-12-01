
    <?php

$servername = "localhost";
$username = "progra62_Karla";
$password = "TicketMiau123";
$dbname = "progra62_ticketMiau";
    
$conexion=mysqli_connect($servername, $username, $password, $dbname);
    
$ID_GUIA= $_GET["id"];    
$Validacion = "Validado";

$query = "UPDATE compra SET Validacion = '$Validacion' WHERE RFC='$rfc'";
$Resultado= mysqli_query($conexion,$query);

if($Resultado)
{ 
   echo '<html lang="es">
    <head>
        <meta charset="UTF-8">
	<title> TICKETMIAU </title>
	</head>
	<body bgcolor= black > 
			
<br>
		<center><b> <font size=10 color= white face=arial> GRACIAS POR SU COMPRA! </font></b> </center>
       <center> <img src= https://i.pinimg.com/originals/d0/c8/7b/d0c87bc251511923ddebdf5f11df2a85.gif > </center>
       </br></br>
       
<center><b><font color=gray face=arial> Alumna: Gallardo Santos Karla Edith</font></b><br>
<font color=gray face=arial>No.Control: 19320953</font> <br>

</body >
</html>';
}else
{
    echo "No validado";
    
}

       ?>