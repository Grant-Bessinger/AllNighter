<?php

$servername = "localhost"; //server
$username = "root"; //username of the server
$password = "";  //password of the server  
$dbname = "test"; //database



// Create a connection to the MySQL database 
$conn = mysqli_connect($servername, $username, $password, $dbname);
$select_db = mysqli_select_db($conn, $dbname);

// Check connection
if (!$conn){
die("connection failed: " . mysqli_connect_error());
}
echo "Connection successfull!";

?>