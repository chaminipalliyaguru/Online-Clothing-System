<?php

error_reporting(E_ERROR | E_PARSE); ini_set('display_errors', '1');

include("DB.php");
session_start();

$product_id = $_POST['product_id'];
$path = "uploads/";

$res = mysqli_query($conn, "SELECT * FROM product WHERE idproduct = '$product_id' ");
while ($row=mysqli_fetch_array($res)) {

  $img = $row['image'];

}

unlink("uploads/".$img);

$query = "DELETE FROM product WHERE idproduct = '$product_id' ";
if (!mysqli_query($conn, $query)) {
  die('Error: ' . mysqli_error($conn));
}
header("location:../manage_product.php?succ=1");

 ?>
