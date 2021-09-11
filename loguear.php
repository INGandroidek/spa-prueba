<?php
require'conexion.php';
$con=conectar();
session_start(); 

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "SELECT COUNT(*) as contar FROM USUARIO WHERE usuario = '$usuario' AND pass = '$pass'";
$consulta= mysqli_query($con,$sql);
$array= mysqli_fetch_array($consulta);

if($array['contar']>0){         //se validan los datos y en caso de ser correctos se llevan a principal.php que es el menu del admin
    header("location: principal.php");
}else{
    echo "  DATOS INCORRECTOS";
}




?>