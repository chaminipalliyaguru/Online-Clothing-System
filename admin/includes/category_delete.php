<?php

error_reporting(E_ERROR | E_PARSE); ini_set('display_errors', '1');

include("DB.php");
session_start();

$cat_id = $_POST['category_type'];

$query = "DELETE FROM category WHERE idCategory = '$cat_id' ";
if (!mysqli_query($conn, $query)) {
  die('Error: ' . mysqli_error($conn));
}
header("location:../manage_category.php?su=1");

 ?>
