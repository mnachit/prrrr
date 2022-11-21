<?php
include 'database.php';
session_start();


$t = 1;
$url =  basename($_SERVER["REQUEST_URI"]);

if($url === $_SESSION['coode'])
{  
    global $conn;
    $mail = $_SESSION['emailana'];
    $fg = "UPDATE `users` SET `code_vere`= 1 WHERE email = '$mail'";
    echo ($_SESSION['emailana']);
    echo ($_SESSION['passana']);
    $quere3 = mysqli_query($conn, $fg);
    var_dump($quere3);
    
    unset($_SESSION['emailana']);
    unset($_SESSION['passana']);
    
    $_SESSION['message_ver'] = "Votre compte a été activé";
    header('location: ../log_in.php');
}
?>