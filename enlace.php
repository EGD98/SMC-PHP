<?php
$servername = "us-imm-web433.main-hosting.eu";
  $database = "u501563985_wifi_access";
  $username = "u501563985_ESP32";
  $password = "ESP32WiFi";
  // Create connection
  if ($_POST){
      print_r ($_POST);
      echo ("Si hay post");
  $parametro= $_POST["valor"];
  print_r ($parametro);
  $conexion= @new mysqli($servername, $username, $password, $database);
  $querys = "SELECT Nombre FROM usuario where Nombre='$parametro'";
  $resultado = $conexion->query($querys);
  
  if ($resultado == false){
    $error_msg = $conexion->error;
    $datos[] = [
        'resp' => FALSE, 
        'error_msg' => $error_msg,
        ];
        echo json_encode($datos);
  }else{
    $datos =[];

    foreach ($resultado as $dato) {

        $datos[] = [
        'name' => $dato['Nombre']];
  }
  echo json_encode($datos);
}
$conexion->close();    
      
  }else{
      
      echo ("no hay post");
  }
  
  ?>