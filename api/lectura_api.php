<?php
//header("Refresh:1");
//header('Content-Type: application/json');

//echo "Esto vale RFID".$valor;
//include_once './BBDD.php';
if(!empty($_GET)){
    $valor=$_REQUEST['rfid'];

//$valor=mt_rand(5, 1546876);
echo $valor." un dato";
        $Json='[{"Rfid":'.'"'.$valor.'"}]';
        echo  $Json;
    
}else {
    echo "no hay get";
} 


/*
if($valor != ""){
    $SQL1="INSERT INTO `lectura` (`Lectura`) VALUES ('$valor')";
$sentencia1= $pdo-> prepare($SQL1);
$sentencia1-> execute();
$sql2="DELETE  FROM lectura where id < (select max(id) from lectura)-1";//-N
$sentencia1= $pdo-> prepare($sql2);
$sentencia1-> execute();
}

    //var_dump($sql);
    $sql='SELECT * FROM lectura ORDER BY ID DESC LIMIT 1';//Seleccionando el ultimo registro de acuerdo al "ID"
    //var_dump($sql);
    $sentencia= $pdo-> prepare($sql);
    $sentencia-> execute();
    $datos=$sentencia->fetchAll();
    $codificado=json_encode($datos);
    //echo $codificado;
    $decodificado=json_decode($codificado);
    //var_dump($decodificado);
    foreach ($decodificado as $obj)
    {
        // Here you can access to every object value in the way that you want
        $Json='[{"Rfid":'.'"'.$obj->Lectura.'"}]';
        echo  $Json;
        $id=$obj->ID;
        //echo "<br>".$id;
        //var_dump ($id >= 100);
        if($id>=100){
            
            $sql3 = "TRUNCATE TABLE  lectura";
            $sentencia1= $pdo-> prepare($sql3);
            $sentencia1-> execute();
        }
    }
    
*/

?>