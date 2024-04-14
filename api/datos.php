  
<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

header('Content-Type: application/json');
    include_once './BBDD.php';//conexion a la BBDD
    $compara=$_GET['num'];//Valor obtenido con el parametro GET
    date_default_timezone_set('America/Mexico_City');
    $Date = date('Y-m-d '); //FECHA Y HORA
    $time=date('H:i:s');
    $sql='SELECT Rfid FROM clientes';
    $sentencia= $pdo-> prepare($sql);
    $sentencia-> execute();
    $datos=$sentencia->fetchAll();
$codificado=json_encode($datos);
$decodificado=json_decode($codificado,true);
$respuesta=false;
foreach ($decodificado as $indice => $valor) {
    //echo("<br>");//print_r($valor);//Aqui valor es un indice de una matriz por lo cual se debe de ejecutar otro ciclo para mostrar su contenido
    foreach ($valor as $indice2=>$valor2) {
              if($indice2=="Rfid"){//Si esta con el indice llamdo RFID
            //echo $valor2;
            if($compara==$valor2){//Se compara el valor de la BBDD con el recivido por la ESP32 
                //echo("<br>");
                //echo $compara." esta en la base de datos ya que se comparo con este ciclo ".$valor2;
                //echo("<br>");
                //echo" Existe";
                $respuesta=true;//Se marca que son iguales y se cambia el estado de la variable
            }
        }
        
        
    } 
}
$consulta = array("0"=>array("Rfid"=>"autorizado"));//Se escribe una matriz para despues pasarlo a json con su valores respectivos
$consulta2 = array("0"=>array("Rfid"=>"denegado"));
//Mostrando en la pagina el json correspondiente y mandando informacion a la base de datos del estado de la operacion.
if($respuesta==true){
echo json_encode($consulta);
$Estado="Autorizado";
$SQL1="INSERT INTO `peticiones` (`ID`, `RFID`, `Fecha`, `Hora`,`Estado`) VALUES (NULL, '$compara','$Date', '$time','$Estado')";
    $sentencia1= $pdo-> prepare($SQL1);
    $sentencia1-> execute();}
else {echo json_encode($consulta2);
    $Estado="Denegado";
    $SQL1="INSERT INTO `peticiones` (`ID`, `RFID`, `Fecha`, `Hora`,`Estado`) VALUES (NULL, '$compara','$Date', '$time','$Estado')";
    $sentencia1= $pdo-> prepare($SQL1);
    $sentencia1-> execute();
}
?>
