<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparkle";
$port = "3306";

$conn = mysqli_connect($servername,$username,$password,$dbname,$port);

if(!$conn){
	
	die("Connection Failed: ".mysqli_connect_error());
	
}

?>