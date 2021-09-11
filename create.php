<?php
include("conexion.php");
$con=conectar();

$titulo=$_POST['titulo'];
$email=$_POST['email'];

$contenido=$_POST['contenido'];

$imagen=$_FILES['imagen']['name'];
$n_temporal=$_FILES['imagen']['tmp_name'];
$tipo_archivo=$_FILES['imagen']['type'];

$destino = "assets/imagenes/".$imagen;
move_uploaded_file($n_temporal, $destino);


$sql="INSERT INTO publicacion
(titulo,email,imagen,contenido,fecha_post)
VALUES
('$titulo','$email','$imagen','$contenido',now())";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
    echo " no se pudo realizar la operacion";
}
?>