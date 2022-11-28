<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['ncontrol'];
$dni=$_POST['calif'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inicio.php");
    
}else {
}
?>