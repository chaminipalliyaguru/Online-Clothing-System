<?php

include("DB.php");

$full_name = $_POST['fname'];
$un = $_POST['user_name'];
$password = $_POST['password'];
$address = $_POST['address'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];

if($full_name!="" && $un!="" && $password!="" && $address!="" && $contact_no!="" && $email!=""){
$sql = "INSERT INTO user (full_name, User_name, password, Address, Contact_no, email) VALUES ('$full_name', '$un', '$password', '$address', '$contact_no', '$email')";
	//print_r($sql);
if(!mysqli_query($conn,$sql)){
	die('Error: '. mysqli_error($conn));
}
	header("location:../login.php?success=1");
} else{
	header("location:../login.php?success=0");
}

?>
