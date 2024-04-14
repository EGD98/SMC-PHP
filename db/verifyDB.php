
  <?php 
  if ($_POST) {
    $UserName = $_POST['UserName'];
     $psw = $_POST['psw'];
     $CodeAdmin = '0010';
     $CodeJefe = '0011';
      	# code...
  	 //include ('abrirconexion.php')
 
  // Create connection
  $conexion= @new mysqli('us-imm-web433.main-hosting.eu', 'u501563985_ESP32', 'ESP32WiFi', 'u501563985_wifi_access');
    if($conexion->connect_errno){
        echo "No se pudo conectar (" . $conexion->connect_errno.  "): ". $conexion->connect_error;
    }
    else {
        // echo("Conjunto de caracteres inicial: ".$conexion->character_set_name()."<br>");
         if (!$conexion->set_charset("utf8")) {
           echo("Error cargando el conjunto de caracteres utf8: ". $conexion->error);
             exit();
         }

  $consulta = "SELECT UserName, Contraseña, Tipo_de_usuario, Empresa FROM usuario";
   if($conexion->query($consulta)== FALSE)
            {
         	 //echo " error consulta <br>";
         	printf("Errormessage: %s\n", $conexion->error,"<br>");
           /*$error_msg = $conexion->error;
                $respuesta[] = ['respuesta' => FALSE, 'error_msg' => $error_msg ]; //hubo error en la consulta e insercion de datos a la DB

                echo json_encode($respuesta);     */
            exit(); 
            }
        else {
         	
             // echo "exito consulta <br>";
         	  $consultas = $conexion->query($consulta);
           
 ?>

   <?php 

     foreach ($consultas as $dato) {
      
      //echo $dato['Nombre']."<br>";
      //echo $dato['Codigo']."<br>";
       if ( ($UserName == $dato['UserName']) && ($psw == $dato['Contraseña']) && ( ($CodeAdmin == $dato['Tipo_de_usuario']) || ($CodeJefe == $dato['Tipo_de_usuario']) ) ) {
         # code...
          session_start();
          $_SESSION['Administrador'] = $UserName;
           
          //$_SESSION['Empresa'] = $dato['Empresa'];
          header("Location:../registro/registro_admin.php");
          

          //$C=1;
          break;
          
       }
        //$C=0;
      
        }
        //if ($C == 1 ) {
          # code...
          //echo "<h3> ¿Como Administrador de ".$dato['Empresa']." te gustaria registrar un Usuario-Trabajador?</h3>";
          //echo "<a href='http://localhost/gigaticket/reg_ss.html'>Ir a Registro</a>";
        //}
        //else{
        ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="https://sistemasmicrocontrolados.com/imagenes/gt_icon.ico">
    <!-- caracteres-->
    <meta charset="utf-8">
   <title>Verificación</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
   <style type="text/css">
  *{
  padding: 0px;
  margin: 0px;
    }
  body, .card{
  background: -moz-radial-gradient(center,#3E473A 10%, #006999 90% );
    background: -webkit-radial-gradient(center, #3E473A 10%, #006999 90%);
          /*background: -webkit-linear-gradient(top, #FFFFFF, #006699);
     /*background: -moz-linear-gradient(top, #111f11 30%, #006699 90%);
     /*background: linear-gradient(30deg, #111f11 , #006699 );
     */
     color: #fff000;
     font-family: cursive;
    
  }
  .door, .card , .modal-content {
    border: 8px solid #008080;
     box-shadow: #CCCCCC 3px 3px 8px;
  }
  .jumbotron{
  background: -moz-radial-gradient(center,#3E473A 10%, #006999 90% );
    background: -webkit-radial-gradient(center, #3E473A 10%, #006999 90%);
          /*background: -webkit-linear-gradient(top, #FFFFFF, #006699);
     /*background: -moz-linear-gradient(top, #111f11 30%, #006699 90%);
     /*background: linear-gradient(30deg, #111f11 , #006699 );
     */
     
     border: 2px solid #999999;
  }
   .fondogt{
    
      background: #008080;
    border: 2px solid #999999;
  }
  
  article:nth-child(even){
  background: #999999;
}
article:nth-child(odd){
  background: #ccccd2;
}
article {
background: #FFFBCC;
border-radius: 20px ;
padding: 15px;
margin: 15px 0px;
border: 5px solid #00838f;
box-shadow: #CCCCCC 5px 5px 10px;
text-shadow: rgba(14, 98, 81, 0.9) 3px 3px 5px;

outline-offset: 7px;
}
blockquote{
  text-shadow: rgba( 62, 39, 35, 0.8) 3px 3px 5px;
  padding: 15px;
  margin:15px 0px;
  border: 5px solid #2E8B57;
  box-shadow: #fffCCC 5px 5px 10px;

}
blockquote:nth-child(odd){
  background: #00838f ;
}
blockquote:nth-child(even){
  background:  #455a64 ;
}
a.sai {
  color: #fff000;
  text-decoration: none;
  margin: 0px 5px;
    padding: 3px 8px;
}
a.sai:hover {
  border-radius: 15px;
  border: 3px dashed  #1f6cc9 ;
  color: #008080;
}
.footer {
  clear: both;
    padding: 15px;
    margin:15px 0px;
    border-top: 2px solid #999999;
}
</style>
  <body>
    <h2>
      verifiación 
    </h2>
 
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>Error</strong> Usuario no encontrado.
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    <h5>Nombre de usuario y/o Contraseña erroneos, por favor verifícalos</h>
                    <div><a class='btn btn-outline-primary'  href='https://sistemasmicrocontrolados.com'>Ir a Inicio</a></div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/verify.js"></script>
 </body>
</html>
        <?php
          
       
        
        $consultas->free();          
        $conexion->close();
        }
      }
    }
    ?>
 
