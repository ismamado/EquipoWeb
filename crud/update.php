<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['ncontrol'];
$dni=$_POST['calif'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE alumno SET  calif='$dni',nombres='$nombres',apellidos='$apellidos' WHERE ncontrol='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paquete.php");
    }
?>