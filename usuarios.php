<?php 
require_once('./indexp/Cabezera.php');
?>
<div class="container ">
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card  ">
                    <h3 class=" card-header bg-info text-center ">Usuarios</h3>
                    <div class="card-body">
                        <form action="db/usuariosDB.php" method="POST" class="needs-validation" novalidate>
                            <div class="row justify-content-center mt-3 mx-2">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Ingresa nombre de usuario" name="email" required>
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor escribe unemail valido.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="psw">Contraseña:</label>
                                        <input type="password" class="form-control" id="pswd" placeholder="Ingresa contraseña" name="pswd" required>
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">La contraseña debe tener de 6-16 digitos.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center m-2">
                                <div class="col-md-4 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block  " name="enviar">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
require_once('./indexp/pie.php');
?>