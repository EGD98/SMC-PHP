<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail =new  PHPMailer (true);
try {
    $mail ->SMTPDebug =SMTP::DEBUG_SERVER;
    $mail ->isSMTP();
    $mail ->Host= "smtp.hostinger.com";
    $mail->Username   = 'report-system@sistemasmicrocontrolados.com';                     //SMTP username
    $mail->Password   = 'Egd1007@';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587; 
    $mail ->setFrom('report-system@sistemasmicrocontrolados.com','Soporte Sistemasmicrocontrolados');
    $mail->addAddress('eligio897@gmail.com');
    $mail ->isHTML(true);
    $mail->Subjet='Prueba soporte';
    $mail->Body ="Esto es una prueba <b>Soporte</b>";
    $mail->send();
    echo"Correo enviado";
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: ".$mail->ErrorInfo;
}

?>