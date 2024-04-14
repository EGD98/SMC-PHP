<?php
$servername = "us-imm-web433.main-hosting.eu";
$database = "u501563985_wifi_access";
$username = "u501563985_ESP32";
$password = "ESP32WiFi";
// Create connection
$conexion= mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conexion);
?>