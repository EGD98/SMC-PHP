<?php 
require('./indexp/Cabezera.php');
?>

<div class="container  ">

    <div class="row justify-content-center ">
        <div class="col-sm ">
            <div class="jumbotron ">
                
                <div class="row  mx-1">
                    <!-- contact box -->
                    <div class="col-3"></div>
                
                    <div class="col-sm-6 ">
                            <div class="text-center mb-3"><p><b>Envianos sus sujerencias o dudas!
                            </b></p></div>                                        
                                <form action="correo.php" id="form" method="POST" class="form">
                                <div>
                            <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" id="email" name="email"placeholder="name@example.com" >
                            <label for="exampleFormControlInput1" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="asunto" name="asunto"placeholder="Asunto" >
                            </div>
                            <div class="mb-1">
                            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="msg" name="msg" rows="2" ></textarea>
                            </div>
                            <div class="col-12 text-center mt-3"><button class="btn btn-primary"type="submit">Enviar</button></div>
                            <div id="respuesta"></div>
                            <p id="advertencia" style="color:red; text-align:center"></p>
                                </form>

                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="./js/validar_correo.js"></script> 
                
<?php 
require('./indexp/pie.php');
?>