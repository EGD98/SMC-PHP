

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
      background-image: url(../imagenes/NEON.png);
      background-size: cover;
      background-attachment: fixed;
    }
    .h3{
      color:#006699;
      text-shadow: #000000 1px 3px 1px;
      text-align: center;
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
      <img src="https://sistemasmicrocontrolados.com/imagenes/gt_icon.ico" width="30" height="30" class="d-inline-block align-top rounded img-fluid" alt="Gigaticket">
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
        <li class="nav-item active">
          <a class="nav-link" href="./espacios.php"><strong>Espacios</strong><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registros.php"><strong>Registros</strong></a>
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
  <div id="espacios" class="container "><br>
      <h3 class="h3 ">Espacios</h3> <br> <br>
      <div class="container">
         <div class="row ">
          
          <div class="col ">
               <div class="card" style="width:200px">
                   <img class="card-img-top" src="https://sistemasmicrocontrolados.com/imagenes/workSpace.png" alt="Card image" style="width:100%">
                   <div class="card-body">
                      <h5 class="card-title">Click to Search Space</h5>
                      <p class="card-text"></p>
                      <a href="espacios/searchSpace.php" class="btn btn-outline-warning stretched-link btn-block">Search Space</a>
                   </div>
               </div>
           </div>
          <div class="col ">
               <div class="card" style="width:200px">
                   <img class="card-img-top" src="https://sistemasmicrocontrolados.com/imagenes/workSpace.png" alt="Card image" style="width:100%">
                   <div class="card-body">
                      <h5 class="card-title">Click to Add Space</h5>
                      <p class="card-text"></p>
                      <a href="espacios/addSpace.php" class="btn btn-outline-info stretched-link btn-block">Add Space</a>
                   </div>
               </div>
           </div>
           <div class="col  ">
               <div class="card" style="width:200px">
                   <img class="card-img-top" src="https://sistemasmicrocontrolados.com/imagenes/workSpace.png" alt="Card image" style="width:100%">
                   <div class="card-body">
                      <h5 class="card-title">Click to Edit Space</h5>
                      <p class="card-text"></p>
                      <a href="espacios/editSpace.php" class="btn btn-outline-success stretched-link btn-block">Edit Space</a>
                   </div>
               </div>
           </div>
           <div class="col  ">
              <div class="card" style="width:200px">
                 <img class="card-img-top"  src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PGNpcmNsZSBjeD0iMjExLjc0OCIgY3k9IjIxNy4yMTkiIGZpbGw9IiMzNjVlN2QiIHI9IjIxMS43NDgiLz48cGF0aCBkPSJtNDIzLjQ5NiAyMTcuMjE5YzAtMTE2Ljk0NS05NC44MDMtMjExLjc0OC0yMTEuNzQ4LTIxMS43NDgtNC43NjEgMC05LjQ4Mi4xNzMtMTQuMTY1LjQ4MyAxMDUuNDA4IDYuOTY0IDE4OS43MyA5MS4wNSAxOTcuMDU1IDE5Ni4zNTcuNDk4IDcuMTU1LTUuMzY3IDEzLjA3Mi0xMi41MzggMTIuOTE5LTEuMDk5LS4wMjMtMi4yMDEtLjAzNS0zLjMwNi0uMDM1LTg3LjMzMiAwLTE1OC4xMjkgNzAuNzk3LTE1OC4xMjkgMTU4LjEyOSAwIDguMjAxLjYyNyAxNi4yNTUgMS44MzMgMjQuMTE4IDIuMzg0IDE1LjU0Mi04LjkwNiAyOS45NjEtMjQuNTk0IDMxLjAyMi0uMTA3LjAwNy0uMjE0LjAxNC0uMzIxLjAyMSA0LjY4My4zMDkgOS40MDQuNDgzIDE0LjE2NS40ODMgMTE3LjYzNi0uMDAxIDIxMS43NDgtOTUuNTg1IDIxMS43NDgtMjExLjc0OXoiIGZpbGw9IiMyYjRkNjYiLz48Y2lyY2xlIGN4PSIyMTEuNzQ4IiBjeT0iMjE3LjIxOSIgZmlsbD0iI2Y0ZmJmZiIgcj0iMTYyLjU0NCIvPjxwYXRoIGQ9Im0zNzQuMjkyIDIxNy4yMTljMC04OS43Ny03Mi43NzMtMTYyLjU0NC0xNjIuNTQ0LTE2Mi41NDQtNC40MDQgMC04Ljc2NS4xODEtMTMuMDguNTI1IDgzLjk2NSA2LjY4NyAxNDkuOTUzIDc3LjE3NCAxNDkuNDYxIDE2Mi45NzItLjAwMy4wMDQtLjAwNi4wMDctLjAwOS4wMTEtNjguNTg3IDEzLjQ4NC0xMTkuNzQxIDcwLjY2Ny0xMjYuNjU1IDEzOC45MDItMS4xODkgMTEuNzMtMTAuMzc1IDIxLjExMS0yMi4xMjQgMjIuMDk3LS4yMjQuMDE5LS40NDguMDM3LS42NzMuMDU1IDk0LjY0OSA3LjU0MiAxNzUuNjI0LTY3LjAyNyAxNzUuNjI0LTE2Mi4wMTh6IiBmaWxsPSIjZGFmMWY0Ii8+PGc+PGc+PHBhdGggZD0ibTIxMS43NDggMTA0Ljk2M2MtNC4yNjggMC03LjcyNi0zLjQ1OS03LjcyNi03LjcyNnYtMTAuOTIyYzAtNC4yNjggMy40NTktNy43MjYgNy43MjYtNy43MjZzNy43MjYgMy40NTkgNy43MjYgNy43MjZ2MTAuOTIyYzAgNC4yNjctMy40NTggNy43MjYtNy43MjYgNy43MjZ6IiBmaWxsPSIjMzY1ZTdkIi8+PC9nPjxnPjxwYXRoIGQ9Im0yOTYuNTg4IDE0MC4xMDVjLTEuOTc4IDAtMy45NTUtLjc1NS01LjQ2NC0yLjI2NC0zLjAxNy0zLjAxNy0zLjAxNy03LjkwOS4wMDEtMTAuOTI3bDcuNzIzLTcuNzIyYzMuMDE3LTMuMDE3IDcuOTA5LTMuMDE2IDEwLjkyNy4wMDEgMy4wMTcgMy4wMTcgMy4wMTcgNy45MDktLjAwMSAxMC45MjdsLTcuNzIzIDcuNzIyYy0xLjUwOCAxLjUwOC0zLjQ4NiAyLjI2My01LjQ2MyAyLjI2M3oiIGZpbGw9IiMzNjVlN2QiLz48L2c+PGc+PHBhdGggZD0ibTM0Mi42NTMgMjI0Ljk0NWgtMTAuOTIzYy00LjI2OCAwLTcuNzI2LTMuNDU5LTcuNzI2LTcuNzI2IDAtNC4yNjggMy40NTktNy43MjYgNy43MjYtNy43MjZoMTAuOTIzYzQuMjY4IDAgNy43MjYgMy40NTkgNy43MjYgNy43MjZzLTMuNDU5IDcuNzI2LTcuNzI2IDcuNzI2eiIgZmlsbD0iIzM2NWU3ZCIvPjwvZz48Zz48cGF0aCBkPSJtMjE0LjkyNSAzNTkuMDI3Yy00LjI2OCAwLTcuNzI2LTMuNDU5LTcuNzI2LTcuNzI2di0xMC45MjNjMC00LjI2OCAzLjQ1OS03LjcyNiA3LjcyNi03LjcyNnM3LjcyNiAzLjQ1OSA3LjcyNiA3LjcyNnYxMC45MjNjLjAwMSA0LjI2OC0zLjQ1OCA3LjcyNi03LjcyNiA3LjcyNnoiIGZpbGw9IiMzNjVlN2QiLz48L2c+PGc+PHBhdGggZD0ibTExOS4xODUgMzE3LjUwOGMtMS45NzcgMC0zLjk1NS0uNzU1LTUuNDY0LTIuMjYzLTMuMDE3LTMuMDE4LTMuMDE3LTcuOTA5IDAtMTAuOTI4bDcuNzIzLTcuNzIzYzMuMDE4LTMuMDE2IDcuOTA5LTMuMDE2IDEwLjkyOCAwIDMuMDE3IDMuMDE4IDMuMDE3IDcuOTA5IDAgMTAuOTI4bC03LjcyMyA3LjcyM2MtMS41MSAxLjUwOS0zLjQ4NyAyLjI2My01LjQ2NCAyLjI2M3oiIGZpbGw9IiMzNjVlN2QiLz48L2c+PGc+PHBhdGggZD0ibTkxLjc2NiAyMjQuOTQ1aC0xMC45MjJjLTQuMjY4IDAtNy43MjYtMy40NTktNy43MjYtNy43MjYgMC00LjI2OCAzLjQ1OS03LjcyNiA3LjcyNi03LjcyNmgxMC45MjNjNC4yNjggMCA3LjcyNiAzLjQ1OSA3LjcyNiA3LjcyNnMtMy40NTkgNy43MjYtNy43MjcgNy43MjZ6IiBmaWxsPSIjMzY1ZTdkIi8+PC9nPjxnPjxwYXRoIGQ9Im0xMjYuOTA4IDE0MC4xMDVjLTEuOTc3IDAtMy45NTUtLjc1NS01LjQ2My0yLjI2M2wtNy43MjMtNy43MjJjLTMuMDE4LTMuMDE3LTMuMDE4LTcuOTA5LS4wMDEtMTAuOTI3IDMuMDE4LTMuMDE4IDcuOTEtMy4wMTcgMTAuOTI3LS4wMDFsNy43MjMgNy43MjJjMy4wMTggMy4wMTcgMy4wMTggNy45MDkuMDAxIDEwLjkyNy0xLjUwOSAxLjUwOS0zLjQ4NyAyLjI2NC01LjQ2NCAyLjI2NHoiIGZpbGw9IiMzNjVlN2QiLz48L2c+PC9nPjxnPjxwYXRoIGQ9Im0yMTEuNzQ4IDIyOC4xMjNoLTM3LjU0NWMtNC4yNjggMC03LjcyNi0zLjQ1OS03LjcyNi03LjcyNnMzLjQ1OS03LjcyNiA3LjcyNi03LjcyNmgyOS44MTl2LTY1LjM5MmMwLTQuMjY4IDMuNDU5LTcuNzI2IDcuNzI2LTcuNzI2czcuNzI2IDMuNDU5IDcuNzI2IDcuNzI2djczLjExOWMwIDQuMjY2LTMuNDU4IDcuNzI1LTcuNzI2IDcuNzI1eiIgZmlsbD0iIzJiNGQ2NiIvPjwvZz48Y2lyY2xlIGN4PSIzNzguNzk0IiBjeT0iMzczLjMyMyIgZmlsbD0iI2RkNjM2ZSIgcj0iMTMzLjIwNiIvPjxwYXRoIGQ9Im0zNzguNzk0IDI0MC4xMTdjLTUuMTg2IDAtMTAuMy4zMDctMTUuMzMxLjg4NCA2Ni4zNDUgNy42MDQgMTE3Ljg3NSA2My45NDEgMTE3Ljg3NSAxMzIuMzIycy01MS41MyAxMjQuNzE4LTExNy44NzUgMTMyLjMyMmM1LjAzMi41NzcgMTAuMTQ1Ljg4NCAxNS4zMzEuODg0IDczLjU2OCAwIDEzMy4yMDYtNTkuNjM4IDEzMy4yMDYtMTMzLjIwNiAwLTczLjU2Ny01OS42MzgtMTMzLjIwNi0xMzMuMjA2LTEzMy4yMDZ6IiBmaWxsPSIjZGE0YTU0Ii8+PHBhdGggZD0ibTQwMC42NDcgMzczLjMyMyAzOS4yNDYtMzkuMjQ2YzYuMDM1LTYuMDM0IDYuMDM1LTE1LjgxOSAwLTIxLjg1My02LjAzNC02LjAzNC0xNS44MTktNi4wMzQtMjEuODUzIDBsLTM5LjI0NiAzOS4yNDYtMzkuMjQ2LTM5LjI0NmMtNi4wMzQtNi4wMzYtMTUuODE5LTYuMDM0LTIxLjg1MyAwLTYuMDM1IDYuMDM0LTYuMDM1IDE1LjgxOSAwIDIxLjg1M2wzOS4yNDYgMzkuMjQ2LTM5LjI0NiAzOS4yNDZjLTYuMDM1IDYuMDM0LTYuMDM1IDE1LjgxOSAwIDIxLjg1MyAzLjAxNyAzLjAxNyA2Ljk3MiA0LjUyNiAxMC45MjcgNC41MjZzNy45MDktMS41MDkgMTAuOTI3LTQuNTI2bDM5LjI0Ni0zOS4yNDYgMzkuMjQ2IDM5LjI0NmMzLjAxNyAzLjAxOCA2Ljk3MiA0LjUyNiAxMC45MjcgNC41MjZzNy45MDktMS41MDkgMTAuOTI3LTQuNTI2YzYuMDM1LTYuMDM0IDYuMDM1LTE1LjgxOSAwLTIxLjg1M3oiIGZpbGw9IiNmNGZiZmYiLz48Zz48cGF0aCBkPSJtNDAwLjY0NyAzNzMuMzIzIDM5LjI0Ni0zOS4yNDZjNi4wMzUtNi4wMzQgNi4wMzUtMTUuODE5IDAtMjEuODUzLTUuODg1LTUuODg0LTE1LjMyNy02LjAxMy0yMS4zODgtLjQyLjE1NC4xNDIuMzE1LjI3MS40NjUuNDIgNi4wMzUgNi4wMzQgNi4wMzUgMTUuODE5IDAgMjEuODUzbC0zMi43NzcgMzIuNzc3Yy0zLjU3MyAzLjU3My0zLjU3MyA5LjM2NiAwIDEyLjkzOWwzMi43NzcgMzIuNzc3YzYuMDM1IDYuMDM0IDYuMDM1IDE1LjgxOSAwIDIxLjg1My0uMTQ5LjE1LS4zMTEuMjc5LS40NjUuNDIxIDIuOTU0IDIuNzI2IDYuNzAzIDQuMTA2IDEwLjQ2MiA0LjEwNiAzLjk1NSAwIDcuOTA5LTEuNTA5IDEwLjkyNy00LjUyNiA2LjAzNS02LjAzNCA2LjAzNS0xNS44MTkgMC0yMS44NTN6IiBmaWxsPSIjZGFmMWY0Ii8+PC9nPjwvZz48L3N2Zz4=" alt="Card image" style="width:100%">
                 <div class="card-body">
                    <h5 class="card-title">Click to Delete Space</h5>
                    <p class="card-text"></p>
                    <a href="espacios/deleteSpace.php" class="btn btn-outline-danger stretched-link btn-block">Delete Space</a>
                 </div>
             </div>
           </div>
         </div>
      </div>
    </div>
  <!-- Finish Container-->  

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>


