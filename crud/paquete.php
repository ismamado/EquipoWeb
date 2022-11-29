<?php 
    include("conexion.php");
    $con=conectar();
    $tipo = $_GET['A'];
    $id = $_GET['ID'];
   if($tipo=='U') { $sql="SELECT * FROM PAQUETE where id_usuario = $id";}
 if($tipo=='A') { $sql="SELECT * FROM PAQUETE";}
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> LISTA DE PAQUETES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <link rel="stylesheet" href="main.css" >
    </head>
    <body>
  
           <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Aqui otra cosa.</h1>
                              <!--     <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ncontrol" placeholder="N. Control">
                                    <input type="text" class="form-control mb-3" name="calif" placeholder="Calificación">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombre/s">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    
                             <!--        <input type="submit" class="btn btn-success"> ---->
                                    <form action="../login.html" method="post">
             <p></p>
             <p> 
              
            </p> 
        </form> 
         <br><br>
            <form action="../login.html" method="POST">
           <center><input class="btn btn-danger" type="submit" value="Cerrar Sesion"></center>
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
                                                <th><?php  echo $row['ID_GUIA']?></th>
                                                <th><?php  echo $row['destinatario']?></th>
                                                <th><?php  echo $row['direccion_destino']?></th>
                                                <th><?php  echo $row['estatus']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['idpaquete'] ?>" class="EDITAR">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idpaquete'] ?>" class="ELIMINAR">Eliminar</a></th>                                        
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