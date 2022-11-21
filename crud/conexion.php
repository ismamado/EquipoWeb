<?php
function conectar(){
    $host="localhost";
    $user="salon_tareas";
    $pass="Rodolfo123*";

    $bd="admonbd";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
