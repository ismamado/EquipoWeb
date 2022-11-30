<?php

include("conexion.php");
$con=conectar();

$ID=$_GET['id'];
  $tipo = $_GET['tipo'];
    $idu = $_GET['idu'];
$sql="DELETE FROM PAQUETE  WHERE ID_GUIA='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paquete.php?A="$tipo + "&ID=" $idu);
    }
?>
