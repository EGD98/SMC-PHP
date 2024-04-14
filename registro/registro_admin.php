
<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="fonts/style.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../imagenes/gt_icon.ico">
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
    
    body {
        background: -moz-radial-gradient(center, #3E473A 10%, #006999 90%);
        background: -webkit-radial-gradient(center, #3E473A 10%, #006999 90%);
        /*background: -webkit-linear-gradient(top, #FFFFFF, #006699);
     /*background: -moz-linear-gradient(top, #111f11 30%, #006699 90%);
     /*background: linear-gradient(30deg, #111f11 , #006699 );
     */
        color: #fff;
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
            <img src="../imagenes/gt_icon.ico" width="30" height="30" class="d-inline-block align-top rounded img-fluid" alt="Gigaticket">
            <strong> Registros</strong>

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><strong> Administracion</strong> <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="../sesiones/cerrar_sesionRA.php"><strong>Ir a inicio</strong></a>
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
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="navbar-brand" href="#">
                <img src="http://sistemasmicrocontrolados.com/imagenes/aragon.jpg" width="40" height="40" class="d-inline-block align-top rounded img-fluid mx-2" alt="fes aragon">
            </a>
        </div>
    </nav>
    <!-- Finish Menu Gigaticket-->

    <!-- Start Container-->
    <div class="container pt-5 text-center">
        <?php 
    echo "<h3> Bienvenido ".$_SESSION['Administrador']." Administrador de Gigaticket </h3>";
   ?>
        <h4> Tienes hasta 50 registros de personal </h4>
        <h4> ¿Como Administrador te gustaria registrar un Usuario?</h4>
        <div class="row justify-content-center m-3">
            <div class="col-sm-5 text-center">
                <a href='agregar_admin.php' class="btn btn-outline-info btn-lg mt-5">Registrar Personal</a>
                <a href='eliminar_admin.php' class="btn btn-outline-danger btn-lg  mt-5">Eliminar Personal</a>
            </div>
        </div>
        <div class="row justify-content-center m-3">
            <div class="col-sm-3 text-center">
                <a href='../sesiones/cerrar_sesionRA.php' class="btn btn-outline-warning   btn-lg mt-5">Cerrar Sesion</a>
            </div>
        </div>
    </div>
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