<?php

//SET GLOBAL time_zone = "America/Bogota";
//SET time_zone = "-05:00";
//SET @@session.time_zone = "-05:30";
function conectar(){
    $host="localhost"; //conexion a la base de datos
    $user="root";
    $pass="";

    $bd="spa";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>