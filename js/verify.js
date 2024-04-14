$(document).ready(function(){
	console.log("hola");

		//console.log(datos);
		$.get("verifyDB.php", function(respuesta){
        console.log(respuesta);

                //respuesta=JSON.stringify(respuesta);
        /*respuesta = JSON.parse(respuesta);
                
        var texto = "";
       
        for(i = 0; i<respuesta.length; i++){
            texto += `
                <tr id="${respuesta[i]['IdCliente']}">
                    <td class="bg-info " >${respuesta[i]['IdCliente']}</td>
                    <td >${respuesta[i]['Nombre']}</td>
                    <td >${respuesta[i]['Apellido']}</td>
                    <td >${respuesta[i]['Correo']}</td>
                    <td >${respuesta[i]['Telefono']}</td>
                    <td >${respuesta[i]['Rfid']}</td>
                    <td >${respuesta[i]['Habitacion']}</td>
                    <td >${respuesta[i]['Fecha_ingreso']}</td>
                    <td >${respuesta[i]['Estadia']}</td>
                    <td >${respuesta[i]['Hora']}</td>
                    <td ><button  class="btn btn-outline-info  btn-sm edit" name="btn-edi" id = "btn-edit">Editar</button></td>
                </tr>`;                   
                    
                }

                $('#tabla1').empty();
                $('#tabla1').append(texto);
*/
    });
		
});