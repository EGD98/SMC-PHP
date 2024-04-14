<?php 

$link='mysql:host=us-imm-web433.main-hosting.eu;dbname=u501563985_wifi_access';

  $username = "u501563985_ESP32";
  $password = "ESP32WiFi";
  // Crecion de conexion
//  $conexion= @new mysqli($servername, $username, $password, $database);
try{
$pdo= new PDO($link,$username,$password);
//echo'conectado';
}
catch(PDOException $e){
print"Error!: ".$e->getMessage()."<br>";
die();

}
  ?>

