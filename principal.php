<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM publicacion ORDER BY fecha_post DESC" ; //mostrar la base de datos
 
    $query=mysqli_query($con,$sql);
    //$row=mysqli_fetch_array($query);

   echo "<a href='salir.php'>Cerrar Sesion</a>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
<h2>Lista de post</h2>
                                <?php       //listamos los registros
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idpublicacion']?></th>
                                                <th><?php  echo $row['titulo']?></th>
                                                <th><?php  echo $row['email']?></th>
                                                <th><?php  echo "<img src='assets/imagenes/".$row['imagen']."'width=300px'/>"?></th>
                                                <th><?php  echo $row['contenido']?></th>
                                                <th><?php  echo $row['fecha_post']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['idpublicacion'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idpublicacion'] ?>" class="btn btn-danger">Eliminar</a></th>   
                                                <br> <br>                                      
                                            </tr>
                                        <?php 
                                            }
                                        ?>
</body>
</html>