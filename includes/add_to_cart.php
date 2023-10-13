<?php

include("DB.php");
session_start();
if (isset($_SESSION['cart'])) {
} else {
	$_SESSION['cart'] = array();
}

$id = $_POST['id_product'];
$pname = $_POST['item_name'];
$price = $_POST['price'];
$quant = 1;

$quantity = 0;
$result = mysqli_query($conn, "SELECT quantity FROM stock WHERE product_id='$id'  ");
while ($row = mysqli_fetch_array($result)) {
	$quantity = $row['quantity'];
}

$length = count($_SESSION['cart']);

// When empty cart
if ($length == 0) {

	if ($quantity > $quant) {
		$set = $id . "=" . $pname . "=" . $price . "=" . $quant;
		array_push($_SESSION['cart'], $set);
		sort($_SESSION['cart']);
		echo 'Added to Cart';
	} else {
		echo "Out of Stock";
	}
} else {

	$is_ava_cart = false;
	$product_id = "";
	$product_name = "";
	$product_price = "";
	$product_qty = "";

	for ($x = 0; $x < $length; $x++) {
		$_SESSION['cart'][$x];
		$str1 = $_SESSION['cart'][$x];
		$str = explode("=", $str1);
		$product_id = $str[0];
		$product_name = $str[1];
		$product_price = $str[2];
		$product_qty = $str[3];

		if ($product_id == $id) {
			$is_ava_cart = true;
			break;
		}
	}

	// When same product
	if ($is_ava_cart == true) {
		$updated_prod_qty = $product_qty + $quant;
		if ($quantity > $updated_prod_qty) {

			// remove old item
			for ($y = 0; $y < $length; $x++) {
				$cartStr = $_SESSION['cart'][$y];
				$cartArr = explode("=", $cartStr);
				$cart_p_id = $cartArr[0];

				if ($cart_p_id == $product_id) {
					unset($_SESSION['cart'][$y]);
					$_SESSION['cart'] = array_values($_SESSION['cart']);
					break;
				}
			}

			// add updeted item
			$set = $id . "=" . $pname . "=" . $price . "=" . $updated_prod_qty;
			$cart = $_SESSION['cart'];
			$_SESSION['cart'][0] = $set;
			sort($_SESSION['cart']);
			echo 'Added to Cart';
		} else {
			echo 'Out of Stock';
		}

	} else {
		$set = $id . "=" . $pname . "=" . $price . "=" . $quant;
		array_push($_SESSION['cart'], $set);
		sort($_SESSION['cart']);
		echo 'Added to Cart';
	}

}

count($_SESSION['cart']);
header('location:../cart.php');

?>