<?php

include("DB.php");
session_start();

///////////////////////////////////////////////////////////////////////////////////
//           Image Update, Upload and Update Data to DB sparkle
//////////////////////////////////////////////////////////////////////////////////

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image_update"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image_update"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image_update"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}else {
    if (move_uploaded_file($_FILES["image_update"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image_update"]["name"]);
        header("location:../manage_product.php?suc=1");

        $p_id = $_POST['pid'];

        if (isset($_POST['submit'])) {
          $target_file = $target_dir . basename($_FILES["image_update"]["name"]);
          $p_name = $_POST['p_name'];
          $p_price = $_POST['p_price'];
          $p_desc = $_POST['p_desc'];
          $img = $_FILES['image_update']['name'];
          $cat = $_POST['cat'];

          if ($p_name!="" && $p_price!="" && $p_desc!="" && $cat!="") {
          $query = "UPDATE product SET product_name='$p_name', product_price='$p_price', product_description='$p_desc', image='$img', Category_idCategory='$cat' WHERE idproduct='$p_id' ";
          if(!mysqli_query($conn,$query)){
  	        die('Error: '. mysqli_error($conn));

          }
        }
      }
    }else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
 ?>
