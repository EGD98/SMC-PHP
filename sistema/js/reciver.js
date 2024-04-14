/*$.getJSON('http://192.168.1.66/api/sobreescrito.php', function(data){
console.log(data)    ;
/*var display = `rfid: ${data.userId}<br>
                   ID: ${data.id}<br>
                   Title: ${data.title}<br>
                   Completion_Status: ${data.completed}`
                    $(".display").html(display);
});*/


  
/*//$('#rfid').on("click",function(){
    var variable=$('#rfid2').val();
    $('#rfid').val(variable);
});
$(document).ready(function () {
    setInterval(function() {
        fetch('http://192.168.1.66/api/sobreescrito.php')
.then(result => result.json())
.then((output) => {
    rfid=output[0]['Rfid'];
    //console.log(rfid);
      $('#rfid').val(rfid);
    //console.log('Output: ', output[0]['Rfid']);
    
}).catch(err => console.error(err));
        
    }, 100000);
});*/


$(document).ready(function () {
    setInterval(function() {
        fetch('../../api/rfid.txt')
  .then(res => res.text())
  .then(content => {
    let lines = content.split(/\n/);
    lines.forEach(line => $('#rfid').val(line)
    );
 
    
}).catch(err => console.error(err));
        
    }, 5000);
});


