<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM publicacion WHERE idpublicacion='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                    
                                <input type="hidden" name="idpublicacion" value="<?php echo $row['idpublicacion']  ?>">
                                
                                
                                
                                <input type="text" class="form-control mb-3" name="titulo" placeholder="titulo" value="<?php echo $row['titulo']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                                <input type="file" class="form-control mb-3" name="imagen" placeholder="imagen" value="<?php echo $row['imagen']  ?>">
                                <input type="text" class="form-control mb-3" name="contenido" placeholder="contenido" value="<?php echo $row['contenido']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>