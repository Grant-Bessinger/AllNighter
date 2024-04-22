<?php
require_once('../PHP/DBcon.php'); // Include your database connection file

$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$select_query = mysqli_query($conn, "SELECT * FROM users WHERE user_name='$uname' AND password='$pwd'");
$row = mysqli_num_rows($select_query);

if($row>0)
{
	$fetch_data = mysqli_fetch_assoc($select_query);
	$name = $fetch_data['name'];
	$_SESSION['name'] = $name;
	echo json_encode(array("active"=>1, "msg"=>"Login Successful!"));
}
else
{
	echo json_encode(array("active"=>0, "msg"=>"Wrong Credentials!"));
}
?>

