<?php


    $conn = new mysqli("localhost", "root", "", "log");

    if ($conn->connect_error)
    {
        die ("Connection failed :" . $conn->connect_error);
    }
?>