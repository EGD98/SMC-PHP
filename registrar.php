<?php
require_once('./indexp/Cabezera.php');

?>

    
</div>
<div class="container">
    <div class="row">
    <div class="col-xs|sm|md|lg|xl-1-12">
    <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">

                    <div class="card-header bg-info ">
                        <h3 class=" text-center"> Ingresa tus datos ( Solo Administrador)</h3>

                    </div>
                    <form action="db/verifyDB.php" method="POST" class="needs-validation" novalidate>
                        <div class="row justify-content-center mt-5 mx-2">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="UserName">Nombre de usuario:</label>
                                    <input type="text" class="form-control" id="UserName" placeholder="Ingresa nombre de usuario" name="UserName" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">Por favor escribe un nombre de usuario valido.</div>
                                </div>
                                <div class="form-group">
                                    <label for="psw">Contraseña:</label>
                                    <input type="password" class="form-control" id="psw" placeholder="Ingresa contraseña" name="psw" required>
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
    
</div>




<?php
require_once('./indexp/pie.php');

?>