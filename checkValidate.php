

<?php
    session_start();
    if(!(isset($_SESSION['Name']))){
        header("location: log_in.php");
        exit();
    }
?>