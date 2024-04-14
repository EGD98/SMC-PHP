
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
      <button onclick="pruebadb('saul');">enviar</button>
      <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="crossorigin="anonymous"></script>
      <script>
        
          function pruebadb (nombre){
              var par = {
                'valor': nombre };
              console.log(par);
            $.post("enlace.php",par, function(consulta) {          
                var reciver = consulta ;
                console.log(reciver);
        });
          }
          
          
      </script>
  </body>
  </html>