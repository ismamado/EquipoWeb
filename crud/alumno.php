<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CALIFICACIONES ADMONBD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <link rel="stylesheet" href="main.css" >
    </head>
    <body>
  
        <!--    <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ncontrol" placeholder="N. Control">
                                    <input type="text" class="form-control mb-3" name="calif" placeholder="Calificación">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombre/s">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    
                                    <input type="submit" class="btn btn-success">
                                    <form action="../index.html" method="post">
             <p></p>
             <p> 
              d
            </p>  -->
        </form> <form action="/LOGGIN/index.html" method="POST">
           <center><input class="btn btn-danger" type="submit" value="Cerrar Sesion"></center></form> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="TABLE_TITLE" > 
                                   <div class="table__title">Lista de Paquetes </div>
                                    <tr>
                                        <th>N. Guia</th>
                                        <th>Recibe</th>
                                        <th>Dirección</th>
                                        <th>Estatus</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ncontrol']?></th>
                                                <th><?php  echo $row['calif']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['ncontrol'] ?>" class="EDITAR">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ncontrol'] ?>" class="ELIMINAR">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>  
                    
            </div>
             
    </body>
</html>