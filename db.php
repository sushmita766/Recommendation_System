<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";
 $port = 3308; 


// Create connection
$con = mysqli_connect($servername, $username, $password,$db,$port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
