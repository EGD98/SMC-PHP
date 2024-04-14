<?php
//system_report@sistemasmicrocontrolados.com
    //empty True = vacio o null
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
  
    if(!(empty($_POST['email']) && empty($_POST['msg']) && empty($_POST['asunto'] ))){
        $correo=$_POST['email'];
        $msg=$_POST['msg'];
        $asunto=$_POST['asunto'];
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        require 'PHPMailer/Exception.php';
            
        $mail =new  PHPMailer (true);
        try {
            //$mail ->SMTPDebug =SMTP::DEBUG_SERVER;//Depuracion SMTP
            $mail ->isSMTP();
            $mail ->Host= "smtp.hostinger.com"; //servidor
            $mail->Username   = 'system_report@sistemasmicrocontrolados.com';                     //SMTP nombre de usurio
            $mail->Password   = 'Egd1007@';          
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPAuth   = true;
            $mail->Port       = 465;    //Puerto
            $mail ->setFrom('system_report@sistemasmicrocontrolados.com','A contactar');//De que correo se envia
            $mail->addAddress('system_report@sistemasmicrocontrolados.com');//Correo de destino
            $mail ->isHTML(true);// Habilitar HTML
            $mail->Subject=$asunto;//Asunto
            $mail->Body ="<h1 style='color:cyan'>Correo recivido desde la página principal.</h1>    
            <p style='color:red'>De: $correo </p> <br> <p> $msg</p>";
            $mail->send();
            echo"Correo enviado";
            echo" <script>alert('Mensaje enviado con exito!.');
            window.location.replace('./contacto');
            </script>";
        }   
        catch (Exception $e) {
            echo "Hubo un error al enviar el mensaje: ".$mail->ErrorInfo;
        }
       
    }
    else {
        echo" <script>alert('No ingresaste todos los datos y seras redirigido a la pagina de contacto');
        window.location.replace('./contacto');
        </script>";
        //header('Location: ./contacto');
        
    }

   


?>