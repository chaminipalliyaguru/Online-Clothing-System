<?php

include("DB.php");
session_start();

$cn = $_POST['cat_name'];
$cd = $_POST['date_created'];

if ($cn!="" && $cd!="" ) {
$query = "INSERT INTO category (Category_name,date_created) VALUES ('$cn','$cd') ";
if(!mysqli_query($conn,$query)){
  	die('Error: '. mysqli_error($conn));
}
  	header("location:../add_category.php?resp=1");
} else{
  	header("location:../add_category.php?resp=0");
}

?>
