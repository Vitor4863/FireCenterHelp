<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['enviar'])){
 $mail = new PHPMailer(true);

}


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'firehelpcenter@gmail.com';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('firehelpcenter@gmail.com

    ', 'firehelpcenter@gmail.com
    ');
    $mail->addAddress('firehelpcenter@gmail.com

    ', 'firehelpcenter@gmail.com
    ');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('firehelpcenter@gmail.com
    ', 'Information');
    $mail->addCC('firehelpcenter@gmail.com
    ');
    $mail->addBCC('firehelpcenter@gmail.com
    ');
    
     
    //Attachments
    //$mail->addAttachment('img/1.png');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '';
    $mail->Body  = "<h3>Nome:</h3>".$_POST['nome']."<h3>CPF:</h3>".$_POST['cpf']."<br>"."<h3>Email:</h3>".$_POST['email']."<h3>Endereço:</h3>".$_POST['rua']." <br> "."<h3>Emergencia:</h3>".$_POST['mensagem'];
    $mail->send();
    
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "<script> location.href='../visao/visao.php';</script>";
}

