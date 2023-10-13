<?php
session_start();
$p_id = $_GET['key']; 
$length = count($_SESSION['cart']);
for ($x = 0; $x < $length; $x++) {
   $cartStr = $_SESSION['cart'][$x];
   $cartArr = explode("=", $cartStr);
   $cart_p_id = $cartArr[0];

   if ($cart_p_id == $p_id) {
      unset($_SESSION['cart'][$x]);
      $_SESSION['cart'] = array_values($_SESSION['cart']);
   }

}

header("Location: ../cart.php");

?>