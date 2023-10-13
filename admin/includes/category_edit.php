<?php

include("DB.php");
error_reporting(E_ERROR | E_PARSE); ini_set('display_errors', '1');

$c_id = $_POST['cid'];
$category = $_POST['c_name'];
$date = $_POST['cre_d'];

if ($category!="" && $date!="") {
  $sql = "UPDATE category SET Category_name='$category', date_created='$date' WHERE idCategory='$c_id' ";

  if (!mysqli_query($conn,$sql)) {
     die('Error: ' . mysqli_error($conn));
  }
  header("location:../manage_category.php?s=1");

  } else {

  header("location:../manage_category.php?s=0");

  }

 ?>
