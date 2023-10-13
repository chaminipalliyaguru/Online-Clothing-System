<?php

include("DB.php");
session_start();

$full_name = $_POST['full_name'];
$user_name = $_POST['user_name'];
$pwd = $_POST['pwd'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];

if ($full_name!="" && $user_name!="" && $pwd!="" && $address!="" && $contact!="" && $email!="") {
  $query = "UPDATE user SET full_name='$full_name', User_name='$user_name', Password='$pwd', Address='$address', Contact_no='$contact', email='$email' WHERE iduser = '".$_SESSION['iduser']."' ";

  if (!mysqli_query($conn,$query)) {
    die('Error: ' . mysqli_error($conn));
}
header("location:../customer_profile.php?response=1");
} else {
header("location:../customer_profile.php?response=0");
}

 ?>
