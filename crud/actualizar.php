<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
$tipo = $_GET['tipo'];
$idu = $_GET['idu'];
$sql="SELECT * FROM PAQUETE WHERE ID_GUIA='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
         
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- <link href="css/style.css" rel="stylesheet"> -->
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                  
                       
                  
                    <table>
                    <form action="update.php?tipo=<?php echo $tipo  ?>&idu=<?php echo $idu ?>" method="POST">
               
                   <tr>
                       <td>
                           
                    
                    <div>
               
                    <th colspan="2"><h2> PAQUETE </h2></th>
                    
                 <!--    <tr>
                         <td>Nombre:</td>
                         <td><input type=text name="nombre_remitente"></td>  
                     </tr>
                     -->
                      <tr>
                            <td>Nombre:</td>
                            <td><input type=text name="nombre_destinatario" value="
                            <?php
                            echo $row['destinatario']
                            
                            ?>
                            "></td>  
                        </tr>
                     <tr>
                         <td>Estado:</td>
                        <td><select name="estado_remitente">
                             <option value= "Guerrero" >Guerrero</option>
                             <option value= "CDMX">CDMX</option>
                             <option value="Oaxaca">Oaxaca</option>
                             <option value="Campeche">Campeche</option>
                             <option value="Chiapas">Chiapas</option>
                             <option value="Colima">Colima</option>
                             <option value="Sonora">Sonora</option>
                             <option value="Oaxaca">Oaxaca</option>
                             <option value="Queretaro">Querétaro</option>
                             <option value="Veracruz">Veracruz</option>
                             <option value="Yucatan">Yucatan</option>
                             <option value="Jalisco">Jalisco</option>
                           </select></td> 
                     </tr>
             
                     <tr>
                        <td>Tipo de envio:</td>
                       <td><select name="tipo_remitente">
                            <option value= "Estandar" >Estandar - $130 (7-10 días) </option>
                            <option value= "Express">Express - $220 (3-5 días) </option>
                            <option value="Ultra">Ultra express - $300 (1 día) </option>
                          </select></td> 
                    </tr>
                     
                
                   
                     
                     <tr>
                         <td>Correo electronico:</td>
                         <td><input type=email name="correo_remitente" value="
                            <?php
                            echo $row['correo_destino']
                            
                            ?>
                            "></td>  
                     </tr>
             
                   
             
            </div>
                      </td>
                      <td>
                     <div class="contenido_destinatario">
                                                
                     
                       
                       
                        
                       
                
                        <tr>
                            <td>Dirección:</td>
                            <td><input type=text name="direccion_destinatario" value="
                            <?php
                            echo $row['direccion_destino']
                            
                            ?>
                            "></td>  
                        </tr>

                      
                        
                      
                
                        <tr>
                            <td>Telefono:</td>
                            <td><input type=text name="telefono_destinatario" value="
                            <?php
                            echo $row['telefono_destino']
                            ?>
                            "></td>  
                        </tr>
                
                     <tr>
                         <td>Estatus:</td>
                        <td><select name="estatus">
                             <option value= "Salio de la sucursal" >Salio de la sucursal</option>
                             <option value= "Llego a tu paqueteria local">Llego a tu paqueteria local</option>
                              <option value="En proceso de entrega a domicilio">En proceso de entrega a domicilio</option>
                              
                             
                             <option value="En confirmación">Entregado</option>
                       
                           </select>
                     </tr>
                     
             
                       </div>
                       </td>
                        </tr>
                           </form>
                 </table>
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                   
                    
               
             

    </body>
</html>