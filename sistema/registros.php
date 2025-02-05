
<?php 
error_reporting(0);
session_start();
 $varsesion = $_SESSION['usuario'];
 if ($varsesion == null || $varsesion = ''){
  echo "No tienes autorizacion, si eres usuario inicia sesion.";
  die();

 }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <!-- <link rel="stylesheet" type="text/css" href="fonts/style.css"> -->	
    <link rel="shortcut icon" type="image/x-icon" href="../imagenes/gt_icon.ico">
    <!-- caracteres-->
    <meta charset="utf-8">
    <title>User Gigaticket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  </head>
  <style type="text/css">
     body{
      background-image: url(../imagenes/CI.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
    .h3{
      color:#006699;
      text-shadow: #000000 1px 3px 1px;
      text-align: left;
    }
    .door, .card {
      border: 8px solid #008080;
       box-shadow: #CCCCCC 3px 3px 8px;
    }
    .a{
      font-family: 'Righteous', cursive;
    }
  </style>
<body class="bg-secondary a">
    <!-- Start Menu Gigaticket-->
  	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <!-- Navbar content -->
     <a class="navbar-brand" href="#">
      <img src="../imagenes/gt_icon.ico" width="30" height="30" class="d-inline-block align-top rounded img-fluid" alt="Gigaticket">
       <strong>Control de usuarios</strong>

    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
    	
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item ">
          <a class="nav-link" href="./index.php"><strong>Inicio</strong> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./clientes.php"> <strong>Usuarios</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./accesos.php"><strong>Accesos</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./espacios.php"><strong>Espacios</strong></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./registros.php"><strong>Registros</strong><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <strong> Menu</strong>
          </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="menu/mi_perfil.php">Mi perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="sesiones/cerrarSesionUGT.php">Cerrar Sesión</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../sistema/index.php">Atrás</a>
          </div>
        </li>
      </ul>
      
       <a class="navbar-brand" href="#">
      <img src="https://sistemasmicrocontrolados.com/imagenes/aragon.jpg" width="40" height="40" class="d-inline-block align-top rounded img-fluid mx-2" alt="fes aragon">
    </a>
  </div>
  </nav>
  <!-- Finish Menu Gigaticket-->

    <!-- Start Container-->
    <div id="registros" class="container "><br>
      <h3 class="h3">Registros</h3>
      <div class="container mt-5 table-responsive-xl"> 
        <input class="form-control col-md-5" id="myInput" type="text" placeholder="Search... Enter name, lastName, email, Rfid or date"><br>
        <div class="row">
          <div class="col-xl-12">
            <table class="table table-primary table-hover table-bordered">
              <thead class="thead-dark text-center">
                <tr class="">
                  <th>IdCliente</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Teléfono</th>
                  <th>RFID</th>
                  <th>Habitación</th>
                  <th>Fecha ingreso</th>
                  <th>Fecha egreso</th>
                  <th>Hora ingreso</th>
                  <th>Hora egreso</th>
                </tr>
              </thead>
              <tbody class="text-center" id="tabla1">       
              </tbody>          
            </table>
          </div>
        </div>
      </div>
      <div id="res" class="text-center">
         
      </div>
      <br>
    </div>
  <!-- Finish Container-->  

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/registros.js"></script>

</body>
</html>