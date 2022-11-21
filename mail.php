<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include 'database.php';
include 'ver.php';
if(isset($_POST['sybmmit']))   maill();
function maill()
{
    $name = $_POST['namee'];
    $email = $_POST['emaill'];
    $message = $_POST['messagee'];
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mnachit333@gmail.com';                     //SMTP username
    $mail->Password   = 'zacjxozefonfrbrb';                               //SMTP password
    $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
    $mail->Port       = 465;     
    //Content
    $mail->isHTML(true);
    $mail->CharSet = "UTF-8";
    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    $_SESSION['code_ver'] = $verification_code;
    $mail->setFrom('mnachit333@gmail.com', 'mohamed nachit');
    $mail->addAddress('nachitmed70@gmail.com');
    $mail->Subject = 'help';
    $mail->Body    = 'je suis '.$name.', mon courrier est  '.$email.' code est '.$verification_code.'';
    $mail->AltBody = $message;
    $mail->send();
//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
}

function maill_1()
{
    $name = $_POST['namee'];
    $email = $_POST['emaill'];
    $message = $_POST['messagee'];
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mnachit333@gmail.com';                     //SMTP username
    $mail->Password   = 'zacjxozefonfrbrb';                               //SMTP password
    $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
    $mail->Port       = 465;     
    //Content
    $mail->isHTML(true);
    $mail->CharSet = "UTF-8";
    $verification_code1 = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    $_SESSION['code_ver'] = $verification_code;
    $mail->setFrom('mnachit333@gmail.com', 'mohamed nachit');
    $mail->addAddress('nachitmed70@gmail.com');
    $mail->Subject = 'help';
    $mail->Body    = 'je suis '.$name.', mon courrier est  '.$email.'click <a href="http://localhost/Syst-me-de-gestion-des-instruments-de-musique-main/ver.php/'.$verification_code1.'">Here</a> to verify your email';
    $mail->AltBody = $message;
    $mail->send();
    if (!$mail->send())
    {
        echo "frf";
    }
    else
        echo "laa";
//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $_SESSION['coode'] = $verification_code1;
}