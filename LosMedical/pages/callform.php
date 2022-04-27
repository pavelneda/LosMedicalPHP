<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require("../phpmailer/src/Exception.php");
require("../phpmailer/src/PHPMailer.php");
require("../phpmailer/src/SMTP.php");

if (isset($_POST["number"])){
    $mail = new PHPMailer(true);
    $mail->CharSet = 'utf-8';

    $number = htmlspecialchars($_POST["number"]);


    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = 'losmedical3@gmail.com';
    $mail->Password = 'Losmed3.';
    $mail->SMTPSecure = 'ssl';


    $mail->setFrom('losmedical3@gmail.com');
    $mail->addAddress('losmedical3@gmail.com');
    $mail->isHTML(true);

    $mail->Subject = 'New number';
    $mail->Body = $number ;
    $mail->AltBody = '';



    if (!$mail->send()) {
        echo 'Error';
    } else {
        if(isset($_GET["lang"]) && $_GET["lang"] = 'ru'){
            header('location: ../?lang=ru');
        }else {
            header('location: ../');
        }
    }

}

