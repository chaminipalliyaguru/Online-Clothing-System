<?php

include("DB.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if($name!="" && $email!="" && $message!="" && $subject!="" ){
$sql = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message') ";
if(!mysqli_query($conn,$sql)){
	die('Error: '. mysqli_error($conn));
}
	header("location:../contact-us.php?res=1");
} else{
	header("location:../contact-us.php?res=0");
}

?>
