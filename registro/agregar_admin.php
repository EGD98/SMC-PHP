<?php 
error_reporting(0);
session_start();
 $varsesion = $_SESSION['Administrador'];
 if ($varsesion == null || $varsesion = ''){
  echo "No tiene autorizacion, ya que no has iniciado sesion";
  echo"<br>";
  echo "<a href='../registrar'>Ir a Servicios</a>";
  die();

 }
 ?>
<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="fonts/style.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="https://sistemasmicrocontrolados.com/SCM-RFID.ico">
    <!-- caracteres-->
    <meta charset="utf-8">
    <title>Gigaticket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<style type="text/css">
    * {
        padding: 0px;
        margin: 0px;
    }
    
    .door,
    .card,
    .modal-content {
        border: 8px solid #008080;
        box-shadow: #CCCCCC 3px 3px 8px;
    }
    
    body,
    .card {
        background: -moz-radial-gradient(center, #3E473A 10%, #006999 90%);
        background: -webkit-radial-gradient(center, #3E473A 10%, #006999 90%);
        /*background: -webkit-linear-gradient(top, #FFFFFF, #006699);
     /*background: -moz-linear-gradient(top, #111f11 30%, #006699 90%);
     /*background: linear-gradient(30deg, #111f11 , #006699 );
     */
        color: #fff000;
        font-family: cursive;
    }
    
    .fondogt {
        background: #008080;
        border: 2px solid #999999;
    }
    
    article:nth-child(even) {
        background: #999999;
    }
    
    article:nth-child(odd) {
        background: #ccccd2;
    }
    
    article {
        background: #FFFBCC;
        border-radius: 20px;
        padding: 15px;
        margin: 15px 0px;
        border: 5px solid #00838f;
        box-shadow: #CCCCCC 5px 5px 10px;
        text-shadow: rgba(14, 98, 81, 0.9) 3px 3px 5px;
        outline-offset: 7px;
    }
    
    blockquote {
        text-shadow: rgba( 62, 39, 35, 0.8) 3px 3px 5px;
        padding: 15px;
        margin: 15px 0px;
        border: 5px solid #2E8B57;
        box-shadow: #fffCCC 5px 5px 10px;
    }
    
    blockquote:nth-child(odd) {
        background: #00838f;
    }
    
    blockquote:nth-child(even) {
        background: #455a64;
    }
    
    a.sai {
        color: #fff000;
        text-decoration: none;
        margin: 0px 5px;
        padding: 3px 8px;
    }
    
    a.sai:hover {
        border-radius: 15px;
        border: 3px dashed #1f6cc9;
        color: #008080;
    }
    
    .footer {
        clear: both;
        padding: 15px;
        margin: 15px 0px;
        border-top: 2px solid #999999;
    }
</style>

<body>
    <!-- Start Menu Gigaticket-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark fondogt">
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">
            <img src="https://sistemasmicrocontrolados.com/SCM-RFID.ico" width="30" height="30" class="d-inline-block align-top rounded img-fluid" alt="Gigaticket">
            <strong> Registros</strong>

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="agregar_admin.php"><strong> Agregar Admin</strong> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro_admin.php"><strong>Atras</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php"><strong>Ir a inicio</strong></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <strong> Menu</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Mi perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../sesiones/cerrar_sesionRA.php">Cerrar Sesion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Atras</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="navbar-brand" href="#">
                <img src="http://sistemasmicrocontrolados.com/imagenes/aragon.jpg" width="40" height="40" class="d-inline-block align-top rounded img-fluid mx-2" alt="fes aragon">
            </a>
        </div>
    </nav>
    <!-- Finish Menu Gigaticket-->

    <!-- Start Container-->

    <div class="container pt-3 ">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">

                    <div class="card-header bg-info ">
                        <h3 class=" text-center"> Agregar Admin</h3>
                    </div>
                    <form method="POST" action="../db/agregar_adminDB.php" class="needs-validation" novalidate>
                        <div class="row justify-content-center m-5">
                            <div class="col-lg-5">

                                <div class="form-group">
                                    <label for="name">Nombre:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Ingresa Nombre" name="name" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">EL nombre de usuario debe tener de 3-10 digitos.</div>
                                </div>
                                <div class="form-group">
                                    <label for="userName">Nombre de Usuario:</label>
                                    <input type="text" class="form-control" id="userName" placeholder="Ingresa Nombre de Usuario" name="userName" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">El nombre de Usuario debe tener de 3-15 digitos y solo contener letras y numeros.</div>
                                </div>
                                <div class="form-group">
                                    <label for="tipo">Elija el tipo de usuario:</label>
                                    <select id="tipo" name="usertype" class="form-control">
                        <option value="ad">Administrador</option>
                        <option value="tr">Trabajador</option>
                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Ingresa Email" name="email" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">Por favor escribe un correo valido.</div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="lastName">Apellido:</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Ingresa Apellido" name="lastName" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">El Apellido debe tener de 3-15 digitos y solo contener letras.</div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefono:</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Ingresa Telefono" name="phone" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">El Telefono debe tener de 10 digitos y solo contener numeros.</div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" placeholder="Ingresa Contraseña" name="password" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">La contraseña debe tener de 6-16 digitos.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center m-3">
                            <div class="col-lg-4 text-center">

                                <div class="form-group form-check">
                                    <label class="form-check-label">
                     <input class="form-check-input" type="checkbox" name="remember" required> Acepto terminos y condiciones
                     <div class="valid-feedback">Valido.</div>
                     <div class="invalid-feedback">Por favor acepta los terminos y condiciones.</div>
                     </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success btn-lg btn-block m-3 " name="enviar">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!-- Finish Container-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>