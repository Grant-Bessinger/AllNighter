<?php
require_once('../PHP/DBcon.php'); // Include your database connection file

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uname = mysqli_real_escape_string($conn, $_POST['username']);
$pwd = mysqli_real_escape_string($conn, $_POST['password']);

$insert_query = mysqli_query($conn, "INSERT INTO users SET
name='$name', email='$email', user_name='$uname', password ='$pwd'");

if ($insert_query > 0) {
    echo "Sign-up successful!";
} else {
    echo "Error!";
}
?>

