<?php

error_reporting(E_ERROR | E_PARSE); ini_set('display_errors', '1');

include("DB.php");
session_start();

$contact_id = $_POST['id_contact'];

$query = "DELETE FROM contact_us WHERE id_contact_us = '$contact_id' ";
if (!mysqli_query($conn, $query)) {
  die('Error: ' . mysqli_error($conn));
}
header("location:../dashboard.php?r=1");

 ?>
