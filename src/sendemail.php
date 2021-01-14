<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['subscribe'])){
    $name = $_POST['NAME'];
    $surname = $_POST['SURNAME'];
    $email = $_POST['EMAIL'];
    $message = $_POST['MESSAGE'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'myemail@gmail.com'; //SMTP server email
        $mail->Password = 'gmailpassword';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port = '587';

        $mail->setFrom('myemail@gmail.com'); //SMTP server email
        $mail->addAddress('anotherorthesameemail@gmail.com'); // the email that receives the message - could be whichever email

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Form)';
        $mail->Body = "<h3>Name : $name <br> Surname : $surname <br> Email : $email <br> Message : $message </h3>";

        $mail->send();
        $alert = '<div class="alert-success">
                <span>Messaggio inviato! Grazie per averci contattato.</span>
                </div>';
    
    } catch (Exception $e){
        $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
                </div>';
    }

}


?>