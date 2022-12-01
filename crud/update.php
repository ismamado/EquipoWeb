<?php

include("conexion.php");
$con=conectar();

$nombre_destinatario=$_POST['nombre_destinatario'];
$dni=$_POST['calif'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$tipo = $_GET['tipo'];
$idu = $_GET['idu'];

$sql="UPDATE alumno SET  calif='$dni',nombres='$nombres',apellidos='$apellidos' WHERE ncontrol='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
              Header("Location: paquete.php?A=$tipo&ID=$idu");
    }
?>