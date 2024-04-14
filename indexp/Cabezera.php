<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="https://sistemasmicrocontrolados.com/
/imagenes/SCM-RFID.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./indexp/style.css">
    <title>SCM</title>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark fondogt">
        <!-- Navbar content -->
        <a class="navbar-brand" href="https://sistemasmicrocontrolados.com">
            <img src="http://sistemasmicrocontrolados.com/imagenes/SCM-RFID.PNG" width="120" height="120" class="d-inline-block align-top rounded img-fluid" alt="SCMRFID">
            

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto ">
                <li class="nav-item <? echo $active?> ">
                    <a class="nav-link" href="https://sistemasmicrocontrolados.com"><strong>Inicio</strong> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <? echo $activer?>">
                    <a class="nav-link" href="registrar"> <strong>Registro</strong></a>
                </li>
                <li class="nav-item <? echo $activeu?>">
                    <a class="nav-link" href="usuarios"><strong>Usuarios</strong></a>
                </li>
               
                <li class="nav-item <? echo $activec?>">
                    <a class="nav-link" href="contacto"><strong>Contacto</strong></a>
                </li>
            </ul>
            
            <a class="navbar-brand" href="#">
                <img src="https://sistemasmicrocontrolados.com/imagenes/aragon.jpg" width="40" height="40" class="d-inline-block align-top rounded img-fluid mx-2" alt="fes aragon">
            </a>
            
            
        </div>
    </nav>
<div class="container">
    

    
