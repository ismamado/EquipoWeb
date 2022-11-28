<?php
function conectar(){
    $host="localhost";

    $user="softteci_paqueteria";
    $pass="equipoweb1";

    $bd="softteci_paqueteria";


    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
