<?php

include("DB.php");
session_start();

$username = $_POST['email'];
$password = $_POST['password'];

$name="";
$user_id=0;

$reasult = mysqli_query($conn, "SELECT * FROM user WHERE User_name='".$username."' && Password='".$password."' ");
while($row = mysqli_fetch_array($reasult)){

	$email = $row["User_name"];
	$pwd = $row["Password"];
	$name = $row["full_name"];
	$user_id = $row["iduser"];
}

if($username == "" || $password == ""){

	echo("Empty");
}
if($username == $email && $password == $pwd){
	$_SESSION["iduser"] = $user_id;
	//print_r($_SESSION);
	header('location:../index.php?res=1');
} else {
	header('location:../login.php?res=0');
}

?>
