<?php
<<<<<<< HEAD
    
    $servername="db";
    $username="webpro23";
    $password="team7";
    $dbname="webpro23";
=======
//session_start(); @ob_start();
$servername="db";
$username="webpro23";
$password="team7";
$dbname="webpro23";

//creating connection

$conn = new mysqli($servername , $username , $password , $dbname);

//check the connection 

if ($conn->connect_error){
    die ("connection failed:" . $conn->connect_error);
}
>>>>>>> 8327f0406187e1a3ce8b026c571ac7dd2ac60caa


?>