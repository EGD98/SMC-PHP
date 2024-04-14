<?php 
date_default_timezone_set('America/Mexico_City');
$Date = date('Y-m-d ');
$time = date('H:i:s');
$sql = 'SELECT * FROM peticiones ORDER BY ID DESC LIMIT 1'; //Seleccionando el ultimo registro de acuerdo al "ID"
//var_dump($sql);
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$datos = $sentencia->fetchAll();
$codificado = json_encode($datos);
$RFID_ingresado = "";
$Acceso = "";
$Fecha_ingreso = "";
$Hora_ingreso = "";
$decodificado = json_decode($codificado, true);
foreach ($decodificado as $indice => $valor) {
    foreach ($valor as $indice2 => $value2) {
        // echo $indice2;
        if ($indice2 == 1) {
            //echo( "Ultimo RFID ingresado: ".$value2." <br>";
            $RFID_ingresado = $value2;
        }
        if ($indice2 == 4) {
            //echo "Acceso: ".$value2."<br>";
            $Acceso = $value2;
        }
        if ($indice2 == 2) {
            //echo "Fecha de ingreso: ".$value2." <br>";
            $Fecha_ingreso = $value2;
        }
        if ($indice2 == 3) {
            //echo "Hora de ingreso: ".$value2."<br>";
            $Hora_ingreso = $value2;
        }
    }
}
?>