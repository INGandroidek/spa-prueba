<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM publicacion ORDER BY fecha_post DESC" ; //mostrar la base de datos
 
    $query=mysqli_query($con,$sql);
    //$row=mysqli_fetch_array($query);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA PRUEBA SISTEMAS</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-8">
                            
                                <form action="create.php" method="POST" enctype="multipart/form-data">

                                <input type="text"  class="form-control mb-3" name="titulo" placeholder="Titulo">
                                <input type="email" class="form-control mb-3" name="email" placeholder="Email">
                                <input type="file"  class="form-control mb-3" name="imagen" placeholder="Imagen" id="imagen">
                                <textarea type="text" class="form-control mb-3" name="contenido" cols="40" rows="5" placeholder="contenido"></textarea>
                                <div class="g-recaptcha" data-sitekey="6LdPwlQcAAAAAFCw_r5zFFX1pCEvaZDqmjK2GjxC"></div> 
    
                                <input type="submit" class="btn btn-primary">
                                </form>
                                <h1>Lista de post</h1>
                                <?php       //listamos los registros
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['titulo']?></th>
                                                <th><?php  //echo $row['email']?></th>
                                                <th><?php  echo "<img src='assets/imagenes/".$row['imagen']."'width=300px'/>"?></th>
                                                <th><?php  echo $row['contenido']?></th>
                                                <th><?php  echo $row['fecha_post']?></th> <br>   
                                                
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                        </div>

                        
                    </div>  
        </div>
</body>
</html>