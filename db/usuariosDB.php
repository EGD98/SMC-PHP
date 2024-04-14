<?php	
  if ($_POST) {
  # code...  
$email=( $_POST["email"]);//filtrando inyeccion sql sensilla con este comando
  $pswd=($_POST["pswd"]);
  
  //echo "<h2> Hola  tu usertype es:" .$userType. "</h2";
  /*addslashes
  if ($userType == 'Administrador') {
    # code...
    $userType = '0010';
  }
  else {
    $userType = '0001';

  }
*/
$servername = "us-imm-web433.main-hosting.eu";
  $database = "u501563985_wifi_access";
  $username = "u501563985_ESP32";
  $password = "ESP32WiFi";
  // Create connection
  $conexion= @new mysqli($servername, $username, $password, $database);
    if($conexion->connect_errno){
        echo "No se pudo conectar (" . $conexion->connect_errno.  "): ". $conexion->connect_error;
    }
    else {
        // echo("Conjunto de caracteres inicial: ".$conexion->character_set_name()."<br>");
         if (!$conexion->set_charset("utf8")) {
           echo("Error cargando el conjunto de caracteres utf8: ". $conexion->error);
             exit();
         }
         // else {
         // echo("Conjunto de caracteres actual: ". $conexion->character_set_name()."<br>");
          // }
          // echo "conexion exito <br>";
         $querys = "SELECT  usuario.Nombre, usuario.Apellido,usuario.UserName, usuario.Correo, usuario.Contraseña, usuario.Tipo_de_usuario FROM usuario WHERE  usuario.Correo = '$email' AND  usuario.Contraseña = '$pswd' ";
         $resultado = $conexion->query($querys);
         
         if($resultado == FALSE){
             echo " error consulta <br>";
             printf("Errormessage: %s\n", $conexion->error,"<br>");
             printf("Errormessage: %s\n", $conexion->errno,"<br>");
             printf("Affected rows (SELECT): %d\n", $conexion->affected_rows);
             
            }
           
            if ($resultado->num_rows === 0) {
              // ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
              // no. Nosotros decidimos. En este caso, ¿podría haber sido
              // actor_id demasiado grande? 
              
             // printf("Lineas afectadas (SELECT): %d\n", $conexion->affected_rows);
              
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
        * {
            padding: 0px;
            margin: 0px;
        }
        
        body,
        .card {
            background: -moz-radial-gradient(center, #3E473A 10%, #006999 90%);
            background: -webkit-radial-gradient(center, #3E473A 10%, #006999 90%);
            /*background: -webkit-linear-gradient(top, #FFFFFF, #006699);
     /*background: -moz-linear-gradient(top, #111f11 30%, #006699 90%);
     /*background: linear-gradient(30deg, #111f11 , #006699 );
     */
            color: #fff000;
            font-family: cursive;
        }
        
        .door,
        .card,
        .modal-content {
            border: 8px solid #008080;
            box-shadow: #CCCCCC 3px 3px 8px;
        }
        
        .jumbotron {
            background: -moz-radial-gradient(center, #3E473A 10%, #006999 90%);
            background: -webkit-radial-gradient(center, #3E473A 10%, #006999 90%);
            /*background: -webkit-linear-gradient(top, #FFFFFF, #006699);
     /*background: -moz-linear-gradient(top, #111f11 30%, #006699 90%);
     /*background: linear-gradient(30deg, #111f11 , #006699 );
     */
            border: 2px solid #999999;
        }
        
        .fondogt {
            background: #008080;
            border: 2px solid #999999;
        }
        
        article:nth-child(even) {
            background: #999999;
        }
        
        article:nth-child(odd) {
            background: #ccccd2;
        }
        
        article {
            background: #FFFBCC;
            border-radius: 20px;
            padding: 15px;
            margin: 15px 0px;
            border: 5px solid #00838f;
            box-shadow: #CCCCCC 5px 5px 10px;
            text-shadow: rgba(14, 98, 81, 0.9) 3px 3px 5px;
            outline-offset: 7px;
        }
        
        blockquote {
            text-shadow: rgba( 62, 39, 35, 0.8) 3px 3px 5px;
            padding: 15px;
            margin: 15px 0px;
            border: 5px solid #2E8B57;
            box-shadow: #fffCCC 5px 5px 10px;
        }
        
        blockquote:nth-child(odd) {
            background: #00838f;
        }
        
        blockquote:nth-child(even) {
            background: #455a64;
        }
        
        a.sai {
            color: #fff000;
            text-decoration: none;
            margin: 0px 5px;
            padding: 3px 8px;
        }
        
        a.sai:hover {
            border-radius: 15px;
            border: 3px dashed #1f6cc9;
            color: #008080;
        }
        
        .footer {
            clear: both;
            padding: 15px;
            margin: 15px 0px;
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
        <h5>Lo sentimos. No se pudo encontrar el usuario, verifiquelo e Inténtelo de nuevo.<br></h5>
        <h5>Nombre de usuario y/o Contraseña erroneos, por favor verifícalos</h>
            </br>
            </br>
            <div class="text-center"><a class='btn btn-danger text-center' href='https://sistemasmicrocontrolados.com/usuarios.php'>Ir a Inicio</a></div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            <script type="text/javascript" src="../js/verify.js"></script>
    </body>

    </html>
    <?php
            exit;
              }
            else { 


           // $query2 = "SELECT usuario.UserName FROM usuario WHERE  usuario.Correo = '$email' AND  usuario.Contraseña = '$pswd' ";
            $Datos = $resultado->fetch_assoc();
            /*
            echo " BIENVENIDO <br>"; 
            echo "Bienvenido " . $Datos['Nombre'] . " " . $Datos['Apellido'] . " Tu usuario es: " . $Datos['UserName'] . ".<br>";

           
            */
            $resultado->close();
            $conexion->close();
            session_start();
            $_SESSION['usuario'] = $Datos['UserName'];
            $_SESSION['email'] = $Datos['Correo'];
            header("Location: ../sistema/index.php");
            //printf("Lineas afectadas (SELECT): %d\n", $conexion->affected_rows);
            
             die(); 
             
             }
             
       }   
}
?>