<?php

include("conexion.php");
$con=conectar();

$idpaquete=$_GET['id'];

$sql="DELETE FROM softteci_paqueteria.paquete WHERE idpaquete='$idpaquete'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
