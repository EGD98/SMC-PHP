$(document).ready(function(){
    obtenerDatos();

    $('#btn-actualizar').click(function(){  
        obtenerDatos();         
    });
    
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        busqueda = { 
            'busqueda':value
        };
        $.post("../db/busqueda.php", busqueda, function(respuesta){
            //console.log(respuesta);
            respuesta = JSON.parse(respuesta);         
            if (!(respuesta[0]['resp']==true)) {
                MostrarTabla(respuesta);
                $('#res').empty();           
            } 
            else {   
                var res="";
                res += `<h3>No hay resultados</h3>`;                    
                $('#tabla1').empty();
                $('#res').empty().append(res);
            }
        }); //cierra la busqueda a la DB  
    }); //cierra funcion de myInput
}); //cierra la la funcion principal


$(document).on('click', '#btn-edit', function(){
    $("#editModal").modal("show");
    var atributo = {'id_user' : $(this).parent().parent().attr('id')};
    console.log(atributo);
    $.post('../db/editClientDB.php', atributo, function(respuesta){
      //console.log(respuesta);
      data = JSON.parse(respuesta);
       //console.log(data[0]['IdC']);

        $('#id_update').val(data[0]['IdC']);
        $('#name').val(data[0]['name']);
        $('#lastName').val(data[0]['lastName']);
        $('#email').val(data[0]['email']);
        $('#phone').val(data[0]['phone']);
        $('#rfid').val(data[0]['rfid']);
        $('#spaces').val(data[0]['espacio']);
        $('#fecha_i').val(data[0]['fecha_i']);
        $('#fecha_f').val(data[0]['fecha_f']);
        $('#hour_i').val(data[0]['hour_i']);
        $('#hour_f').val(data[0]['hour_f']); 
   });   
});

$('#actualizar').on('click',function(){
    //console.log("actualizando");
       var id = $('#id_update').val(),
            name = $('#name').val(),
            lastName = $('#lastName').val(),
            email = $('#email').val(),
            phone = $('#phone').val(),
            rfid = $('#rfid').val(),
            fecha_i = $('#fecha_i').val(),
            fecha_f = $('#fecha_f').val(),
            hour_i = $('#hour_i').val(),
            hour_f = $('#hour_f').val(),
            nombre_espacio = $('#spaces option:selected').val();

       var datos_enviar = {
            'id' : id,
            'name': name,
            'lastName': lastName,
            'email': email,
            'phone': phone,
            'rfid': rfid,
            'nombre_espacio': nombre_espacio,
            'fecha_i': fecha_i,
            'fecha_f': fecha_f,
            'hour_i': hour_i,
            'hour_f': hour_f
        };
       //console.log(datos_enviar);
       $.post('../db/updateClient.php', datos_enviar, function(respuesta){
        //console.log(respuesta);
        var res = JSON.parse(respuesta);
        console.log(res);
        if (res[0]['resp'] == true) {
            $('#editModal').modal('hide');
            var msj="";
            msj +=`
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Has actualizado un cliente!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                                `;
                $('#alertEC').empty().append(msj);
                obtenerDatos();
        }
        else {
            $('#editModal').modal('hide');
            var msj="";
            msj +=`
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong> No se ha actualizado el cliente!</strong><br>
                        Error este correo ya esta asociado a otro cliente
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                                `;
                $('#alertEC').empty().append(msj);
                obtenerDatos();
        }
       });
});


function obtenerDatos() {
        $.get('../db/registrosDB.php' , function(respuesta) {
            //console.log(respuesta);
            respuesta = JSON.parse(respuesta);
            //console.log(respuesta);
            MostrarTabla(respuesta);
        });
    }

    function MostrarTabla(respuesta)  {
        var tableBody = "";
            for (var i = 0 ; i < respuesta.length ; i++) {

                tableBody +=`
                    <tr id="${respuesta[i]['IdC']}">
                        <td class="bg-info " >${respuesta[i]['IdC']}</td>
                        <td >${respuesta[i]['name']}</td>
                        <td >${respuesta[i]['lastName']}</td>
                        <td >${respuesta[i]['email']}</td>
                        <td >${respuesta[i]['phone']}</td>
                        <td >${respuesta[i]['rfid']}</td>
                        <td >${respuesta[i]['espacio']}</td>
                        <td >${respuesta[i]['fecha_i']}</td>
                        <td >${respuesta[i]['fecha_f']}</td>
                        <td >${respuesta[i]['hour_i']}</td>
                        <td >${respuesta[i]['hour_f']}</td>
                        <td ><button  class="btn btn-outline-info  btn-sm edit" name="btn-edi" id = "btn-edit">Editar</button></td>
                    </tr>
                `;
            }
            $('#tabla1').empty().append(tableBody);
    }   