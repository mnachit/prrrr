<?php

    include 'database.php';

    session_start();

    // include

    if(isset($_POST['save']))        sing();
    if(isset($_POST['login']))        logg();
    if(isset($_POST['save_']))        apdate_();
    if(isset($_POST['ver_code']))        veri_code();
    
    function sing()
    {
        global $conn;

        $first = $_POST['inpfirst'];
        $last  = $_POST['inplast'];
        $Email = $_POST['inpemail'];
        $passw = $_POST['inppass'];
        $date  = $_POST['inpdate'];
        $phone = $_POST['phone'];

        $sql   = "INSERT INTO `users`(`email`, `password`, `first_name`, `last_name`, `date`, `num_tele`) VALUES ('$Email','$passw','$first','$last','$date', '$phone')";

        if ($conn->query($sql) === TRUE) 
        {
            include_once('mail.php');
            maill_1();
            header('location: log_in.php');
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $_SESSION['emailana'] = $Email;
        $_SESSION['passana']  = $passw;
    }

    function logg()
    {
        global $conn;

        $loginemail = $_POST['logemail'];
        $loginpass  = $_POST['logpass'];

        $loginreq = "SELECT * FROM `users` WHERE email = '$loginemail' AND password = '$loginpass'";
        
        
        $res = mysqli_query($conn, $loginreq);
        $rest = mysqli_fetch_assoc($res);
        if($rest['code_vere'] == 1)
        {
            $idpr = $rest['id'];
            $_SESSION['first_namee'] = $rest['first_name'];
            $_SESSION['ki_sba3e'] = $rest['id'];
            $_SESSION['last_namee']  = $rest['last_name'];
            $_SESSION['emaill'] = $rest['email'];
            $_SESSION['datee'] = $rest['date'];
            $_SESSION['num_telee'] = $rest['num_tele'];
            if(mysqli_num_rows($res)!=0){
                header('location: home.php');
            }
            else{
                $_SESSION['message'] = "L'adresse e-mail que vous avez saisie n'est pas associée à un compte";
                header('location: log_in.php');
            }
        }
        else{
            $_SESSION['message'] = "L'adresse e-mail que vous avez saisie n'est pas associée à un compte";
            header('location: log_in.php');
        }
    }

    function apdate_()
    {
        global $conn;

        $f_name = $_POST['title12'];
        $l_name = $_POST['title21'];
        $email_ = $_POST['prix56'];
        $date_ = $_POST['prix34'];
        $Num_ = $_POST['prix43'];
        $M_ = $_POST['prix65'];
        $id__ = $_POST['task-id__'];
        $reaq = "UPDATE `users` SET `email`='$email_',`first_name`='$f_name',`last_name`='$l_name',`date`='$date_',`num_tele`='$Num_' WHERE id = ".$_SESSION['ki_sba3e'];
            
        $quere = mysqli_query($conn, $reaq);

        $loginreq = "SELECT * FROM `users` WHERE id = ".$_SESSION['ki_sba3e'];
        
        
        $res = mysqli_query($conn, $loginreq);
        $rest = mysqli_fetch_assoc($res);
        $idpr = $rest['id'];
        $_SESSION['first_namee'] = $rest['first_name'];
        $_SESSION['ki_sba3e'] = $rest['id'];
        $_SESSION['last_namee']  = $rest['last_name'];
        $_SESSION['emaill'] = $rest['email'];
        $_SESSION['datee'] = $rest['date'];
        $_SESSION['num_telee'] = $rest['num_tele'];

        $_SESSION['message1'] = "Task has been updated successfully !";
        header('location: home.php');
    }
    
    function veri_code()
    {
        global $conn;

        $code_entrer = $_POST['numbercode'];


        if ($_SESSION['coode'] == $code_entrer)
        {
            $reqq1 = "UPDATE `users` SET `code_vere` = 1 where id = ".$_SESSION['ki_sba3e'];
            $rest = mysqli_fetch_assoc($res);
        }
        else 
        echo "kakaka";
    }
 
    


