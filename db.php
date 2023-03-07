<?php
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


?>