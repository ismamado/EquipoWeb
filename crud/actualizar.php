<?php 
    include("conexion.php");
    $con=conectar();
date_default_timezone_set('Mexico/General');
echo date(DATE_ATOM);
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
   <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                  
               <div class="container mt-5">     
                  
                    <table>
                    <form action="update.php?tipo=<?php echo $tipo  ?>&idu=<?php echo $idu ?>" method="POST">
               
                   <tr>
                       <td>
                           
                    
                    <div>
               
                    <th colspan="4"><h2> Actualizacion del Paquete</h2></th>
                    
                 <!--    <tr>
                         <td>Nombre:</td>
                         <td><input type=text name="nombre_remitente"></td>  
                     </tr>
                     -->
                     
                      <tr>
                            <td>Nombre:</td>
                            <td><input type=text class="form-control mb-3" name="nombre_destinatario" value="<?php echo $row['destinatario']?>"></td>  
                        </tr>
                     <tr>
                         <td>Estado:</td>
                        <td><input  type=text   class="form-control mb-3" name="estado" value="<?php echo $row['estado_destino']?>" readonly></td>  
                     </tr>
                     <tr>
                         <td>Total:</td>
                        <td><input  type=text   class="form-control mb-3" name="estado" value="<?php echo $row['total_envio']?>" readonly></td>  
                     </tr>
             
                     <tr>
                        <td>Tipo de envio:</td>
                       <td><select name="tipo_remitente">
                           <?php
                           $tipo = $row['tipo_envio'];
                            $descrip="";
                          if($tipo=='Estandar'){
                              $descrip = "Estandar - $130 (7-10 días) ";
                          }
                          if($tipo=='Express'){
                              $descrip ="Express - $220 (3-5 días) ";
                          }
                          if($tipo=='Ultra'){
                            $descrip = "Ultra express - $300 (1 día) ";
                          }
                           
                           ?>
                           <option value= "<?php echo $tipo?>" ><?php echo $descrip?></option>
                            <option value= "Estandar" >Estandar - $130 (7-10 días) </option>
                            <option value= "Express">Express - $220 (3-5 días) </option>
                            <option value="Ultra">Ultra express - $300 (1 día) </option>
                          </select></td> 
                    </tr>
                    
                     
                     
                
                   
                     
                     <tr>
                         <td>Correo electronico:</td>
                         <td><input type=email name="correo_remitente" value="<?php echo $row['correo_destino']?>"></td>  
                     </tr>
             
                   
             
            </div>
                      </td>
                      <td>
                    
                                                
                     
                       
                       
                        
                       
                
                        <tr>
                            <td>Dirección:</td>
                            <td><input type=text name="direccion_destinatario" value="<?php
                            echo $row['direccion_destino']?>"></td>  
                        </tr>

                      
                        
                      
                
                        <tr>
                            <td>Telefono:</td>
                            <td><input type=text name="telefono_destinatario" value="<?php echo $row['telefono_destino']?>"></td>  
                        </tr>
                
                     <tr>
                         <td>Estatus:</td>
                        <td><select name="estatus">
                            <?php
                            $estado = $row['estatus'];
                          $MenEst = "";
                          $MenEst2 = "";
                          if($estado=='En proceso') {
                              $MenEst = "Salio de la sucursal";
                          }
                          if($estado=='Salio de la sucursal') {
                              $MenEst = "En proceso de entrega a domicilio";
                          }
                          if($estado=='En proceso de entrega a domicilio') {
                              $MenEst = "En confirmacion";
                              $MenEst2 = "Entregado";

                              $asunto = "Confirmacion de paquete";
                              $cuerpo = ' <html lang="es">
                             <head> <meta charset="UTF-8" /> </head>
                              <body>
                              <img src = "https://scontent.fpbc2-4.fna.fbcdn.net/v/t39.30808-6/317593876_2341163519370356_6195216344017730920_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHi_Xzk68-RA_lcK5dK9Ss3ICNIMoePUf0gI0gyh49R_YISUKwGZgvj0b8sNzr75tEyO5d4988yImfDOPnnX6Sb&_nc_ohc=A8Om7R6f6AAAX-4g1Hb&_nc_zt=23&_nc_ht=scontent.fpbc2-4.fna&oh=00_AfAG5Y5mbNZFvcfHTOE1UtJGbjfaxM9U9TUpUo7CBIsxBA&oe=638B8DD4" height=50px ><br>
                              HOLA '.$row['destinatario'].'! Con este correo te informamos que tu paquete ha sido recibido en tu domicilio. 
                              <br>Porfavor confirmanos que recibiste el paquete: <br>
                                  <center><a href="https://www.paqueteria.softtecisc.com/crud/verificacion.php?id='.$row['ID_GUIA'].'" target="Contenido" class="link"> <img src="https://cdn-icons-png.flaticon.com/512/6851/6851140.png" height=90px ></a> </center> <br>
                          <br> En dado caso de no reconocer esta acci贸n ponerse en contacto con el soporte tecnico. <br>
                           隆Gracias por su preferencia!
                          </html></body>
                              ';  
                          
                          $remitente  = 'MIME-Version: 1.0' . "\r\n";
                          $remitente .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                          $remitente .= "Ticketmiau. <itsmiauwe@gmail.com>";
                              
                          mail ($correo,$asunto,$cuerpo,$remitente);

                          }
                            
                            ?>
                             <option value= "<?php echo $MenEst?>" ><?php echo $MenEst?></option>
                       
                           </select>
                     </tr>
                     <tr>
                         <td colspan="4">   <center> <br> <input type="submit" class="btn btn-primary btn-block" value="Actualizar"></center></td>
                     </tr>
                     
            
                       
                       </td>
                       
                        </tr>
                            
                           </form>
                 </table>
                                
                       
                   
                    </div> 
               
             

    </body>
</html>