<?php

include("conexion.php");
$con=conectar();

$idpublicacion=$_POST['idpublicacion'];
$titulo=$_POST['titulo'];
$email=$_POST['email'];

$contenido=$_POST['contenido'];

$imagen=$_FILES['imagen']['name'];
$n_temporal=$_FILES['imagen']['tmp_name'];
$tipo_archivo=$_FILES['imagen']['type'];

$destino = "assets/imagenes/".$imagen;
move_uploaded_file($n_temporal, $destino);

$sql="UPDATE publicacion SET titulo='$titulo',email='$email',imagen='$imagen', contenido='$contenido' WHERE idpublicacion='$idpublicacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: principal.php");
    }else{
        echo "error al actualizar";
    }
?>