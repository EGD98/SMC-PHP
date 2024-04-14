<?php 
session_start();
$_SESSION['RFID']="hola";
$get_rfid=$_GET["rfid"];
$Json='[{"Rfid":'.'"'.$get_rfid.'"}]';  //Escribe en la misma página en formato json 
                                        //el valor recibido por el metodo get para que 
                                        //la ESP32 reciva una repuesta
echo  $Json;
$contenido="<?php header('Access-Control-Allow-Origin: *');
header(\"Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method\");
header(\"Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE\");
header(\"Allow: GET, POST, OPTIONS, PUT, DELETE\");header (\"Refresh:1\"); echo '[{\"Rfid\":'.'\"'.'$get_rfid'.'\"}]';?>";
$contenidotxt="$get_rfid";
//$contenido tendra codigo php para se escrito en disco insertandolo en un archivo de php
if (file_exists("./sobreescrito.php") ){
    $archivo= fopen("./sobreescrito.php","w+");//Preprar para abrir y borrar contenido del archivo php
    $archivo2= fopen("./rfid.txt","w+");
    $archivo = fopen("./sobreescrito.php", "a");//Preprar para abrir y escribir en el archivo
    $archivo2= fopen("./rfid.txt","a");
    fwrite($archivo, PHP_EOL ."$contenido");//Escribiendo en el archivo lo que tiene variable
    fwrite($archivo2, PHP_EOL ."$contenidotxt");
    fclose($archivo);//Cerrando la escritura y lectura del archivo
    fclose($archivo2);
    }
?>