<?php
//header("refresh: 1;");
include_once './BBDD.php';
include_once './capturar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="./rfid2.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ultimo Registro RFID </title>
    <style>
        body {
            background: rgb(80, 32, 237);
            background: linear-gradient(90deg, rgba(80, 32, 237, 0.40379901960784315) 16%, rgba(255, 158, 0, 0.7203256302521008) 74%);
        }

       

        h3 {
            background-color: #212529;
            color: white;
            border-radius: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container text-center mt-1 ">
        <header>
            <h3 class="p-3">Envio de datos RFID al sistema desde Microcontrolador ESP32</h3>
        </header>
    </div>
    <div class="container">
        <table class="table text-center">
            <thead class="table-dark">
                
                <tr>
                    <th scope="col">Ultimo RFID ingresado</th>
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col">Hora de ingreso</th>
                    <th scope="col">Autorización</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="background-color:#0e7f82; color:white" scope="row"><?php echo ($RFID_ingresado) ?></td>
                    <td style="background-color:#484848; color:white"><?php echo $Fecha_ingreso ?></td>
                    <td style="background-color:#484848; color:white"><?php echo $Hora_ingreso ?></td>
                    <?php if (
                        $Acceso == "Denegado"
                    ) {
                        $color = "#db5353; color:white";
                    } else {
                        $color = "#93dbaa ;color:black";
                    } ?>
                    <td style="background-color: <?php echo $color ?>"><?php echo $Acceso ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container mt-3 text-center">
        <footer>
            <h4></h4>
        </footer>
    </div>
</body>

</html>