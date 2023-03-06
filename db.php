<?php
    session_start();
    @ob_start();
    $servername="web-dev-env-main-db-1";
    $username="webpro23";
    $password="team7";
    $dbname="webpro23";


    //creating the connection
    $conn = new mysqli ($servername, $username, $password, $dbname);

    //check the connection
    if ($conn->connect_error){
        die("connection failed:" . $conn->connect_error);
    }
?>
