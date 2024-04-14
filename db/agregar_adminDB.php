<?php	
  if ($_POST) {
  # code...  
  $name=$_POST["name"];
  $lastName=$_POST["lastName"];
  $userName=$_POST["userName"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  //$userType = $_POST["UserType"];
  //echo "<h2> Hola  tu usertype es:" .$userType. "</h2";
  /*
  if ($userType == 'Administrador') {
    # code...
    $userType = '0010';
  }
  else {
    $userType = '0001';

  }
*/

function get_usertype() {
$type = "0001";
if(isset($_POST['usertype'])) {
$usertype = $_POST['usertype'];
switch ($usertype) {
case 'ad':
$type = "0010";
break;
case 'tr':
$type = "0001";
break;
}
}
return $type;
}

$tipo = get_usertype();
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
         $querys = "INSERT INTO Usuario (Nombre, Apellido, UserName, Telefono, Correo, Contraseña, Tipo_de_usuario, Empresa) values ('$name', '$lastName','$userName', '$phone', '$email', '$password', '$tipo', 'Gigaticket')";
         $conexion->query($querys);
       /*  if($conexion->query($querys)== FALSE)
            {
             echo " error consulta <br>";
             printf("Errormessage: %s\n", $conexion->error,"<br>");
            }
            else { */
              
            /*
            
            $Datos = $resultado->fetch_assoc();
            
            $resultado->close();
            $conexion->close();
            session_start();
            $_SESSION['usuario'] = $Datos['UserName'];
            $_SESSION['email'] = $Datos['Correo']; 

            */
             $conexion->close();  
             
            
             session_start();
             $_SESSION['usuario'] = $userName;
             header("Location:https://sistemasmicrocontrolados.com/");

       }   
}
?>
