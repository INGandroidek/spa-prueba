<?php

include("conexion.php");
$con=conectar();

$idpublicacion=$_GET['id'];

$sql="DELETE FROM publicacion  WHERE idpublicacion='$idpublicacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: principal.php");
    }else{
        echo "no se pudo eliminar";
    }
?>