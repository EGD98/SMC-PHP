<?php 

    header('Access-Control-Allow-Origin: *');
//if you need cookies or login etc
    header('Access-Control-Allow-Credentials: true');
    header( "Access-Control-Allow-Private-Network : true");
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Max-Age: 604800');
  //if you need special headers
    header('Access-Control-Allow-Headers: x-requested-with');
  //exit(0);


 ?>

<?php 
$servername = "us-imm-web433.main-hosting.eu";
$database = "u501563985_wifi_access";
$username = "u501563985_ESP32";
$password = "ESP32WiFi";
	$rfid = $_GET['rfid'];

    $conexion= @new mysqli($servername, $username, $password, $database);

    
    if($conexion->connect_errno){
        $indice=1;
        $error_msg = $conexion->error;
        $respuesta[] = ['respuesta' => FALSE, 'error_msg' => $error_msg , 'indice' => 1 ]; //hubo error en la consulta e insercion de datos a la DB
        echo json_encode($respuesta);
        exit();
    }
    else {

        if (!$conexion->set_charset("utf8")) {
            $error_msg = $conexion->error;
          	$respuesta[] = ['respuesta' => FALSE, 'error_msg' => $error_msg , 'indice' => 2]; //hubo error en la consulta e insercion de datos a la DB
            echo json_encode($respuesta);
            exit();
        }
        $querys = " SELECT  * FROM clientes WHERE Rfid = '$rfid' ";
        $consulta = $conexion->query($querys);
        //echo ($querys);
        if($consulta == FALSE) {
            $error_msg = $conexion->error;
          	$respuesta[] = ['respuesta' => FALSE, 'error_msg' => $error_msg, 'indice' => 3 ]; //hubo error en la consulta e insercion de datos a la DB
            echo json_encode($respuesta);
          	//$consulta->free();
            $conexion->close();
            exit();
        }
        if ($consulta->num_rows == 0) {
              // ¡Oh, no hay filas! Unas veces es lo previsto, pero otras
              // no. Nosotros decidimos. En este caso, ¿podría haber sido
              // RFIF_id demasiado grande? 
            $error_msg = $conexion->error;
            $afect_row = $conexion->affected_rows;
          	$respuesta[] = ['respuesta' => FALSE, 'error_msg' => $error_msg, 'affected_rows' => $afect_row , 'indice' => 4]; //hubo error en la consulta e insercion de datos a la DB
            echo json_encode($respuesta);
            $consulta->free();
            $conexion->close();exit();
        }
        else { 
	        foreach ($consulta as $dato) {
                $datos[] = [ 
	            'respuesta' => TRUE,
	            'IdC' => $dato['IdCliente'],
	            'name' => $dato['Nombre'],
	            'lastName' => $dato['Apellido'],
	            'email' => $dato['Correo'],
	            ];
	            
	        }

        }
    $consulta->free();
    }

    $conexion->close();
    
    echo json_encode($datos);
    switch(json_last_error()) {
        case JSON_ERROR_NONE:
           // echo ' - Sin errores';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Excedido tamaño máximo de la pila';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Desbordamiento de buffer o los modos no coinciden';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Encontrado carácter de control no esperado';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Error de sintaxis, JSON mal formado';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Caracteres UTF-8 malformados, posiblemente codificados de forma incorrecta';
        break;
        default:
            echo ' - Error desconocido';
        break;
    }
    

 ?>