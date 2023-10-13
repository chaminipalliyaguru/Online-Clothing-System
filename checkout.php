<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | Checkout</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images1/home/logo2.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

  <?php
    include("includes/DB.php");
    session_start();

    $sess= 0;
    if (isset($_SESSION['iduser'])) {
    $sess= $_SESSION['iduser'];
    }

    $cart="";
    if (isset($_SESSION['cart'])) {
    $cart=$_SESSION['cart'];
    }

  ?>

  </head><!--/head-->

  <body>
  <header id="header"><!--header-->
  <div class="header_top"><!--header_top-->
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contactinfo">
            <ul class="nav nav-pills">
              <li><a href="#"><em class="fa fa-phone"></em> 0332238287</a></li>
              <li><a href="#"><em class="fa fa-envelope"></em>sparkleclothing@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="social-icons pull-right">
            <ul class="nav navbar-nav">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header_top-->

  <div class="header-middle"><!--header-middle-->
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="logo pull-left">
            <a href="index.php"><img src="images/home/logo.png" height="30%" width="40%" alt="" /></a>
          </div>
        </div>

        <?php
          $id = 0;
          $fname = "";
          $result = mysqli_query($conn, "SELECT * FROM user WHERE iduser='$sess' ");
          while ($row = mysqli_fetch_array($result)) {
            $id = $row['iduser'];
            $fname = $row['full_name'];
          }
        ?>

        <div class="col-sm-8">
          <div class="shop-menu pull-right">
            <ul class="nav navbar-nav">
            <!--  <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li> -->
              <li><a href="customer_profile.php"> <?php echo $fname; ?> </a></li>
            </ul>
        </div>
      </div>

        <?php
          if (isset($_SESSION['iduser'])) {
            echo '	<div class="col-sm-8">
                <div class="shop-menu pull-right">
                  <ul class="nav navbar-nav">
                    <li><a href="includes/logout.php"><i class="fa fa-sign-out"></i> LOGOUT </a></li>
                  </ul>
                </div>
              </div>';
          } else {
            echo '	<div class="col-sm-8">
                <div class="shop-menu pull-right">
                  <ul class="nav navbar-nav">
                    <li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
                  </ul>
                </div>
              </div>';
          }
         ?>

      </div>
    </div>
  </div><!--/header-middle-->

  <div class="header-bottom"><!--header-bottom-->
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="mainmenu pull-left">
            <ul class="nav navbar-nav collapse navbar-collapse">
              <li><a href="index.php">Home</a></li>
              <li><a href="cloth_list.php">Shop Now</a></li>
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header-bottom-->
  </header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Credit / Debit Card information</p>
							<form>
								<input type="text" placeholder="Credit / Debit Card Name" required>
								<input type="text" placeholder="Credit / Debit Card Number" required>
								<input type="text" placeholder="Security Code" required>
                <select>
                  <option>-- Expiration Month --</option>
                  <option value="January"> January </option>
                  <option value="February"> February </option>
                  <option value="March"> March </option>
                  <option value="April"> April </option>
                  <option value="May"> May </option>
                  <option value="June"> June </option>
                  <option value="July"> July </option>
                  <option value="August"> August </option>
                  <option value="September"> September </option>
                  <option value="October"> October </option>
                  <option value="November"> November </option>
                  option value="December"> December </option>
                </select> <br> <br>
                <select>
                  <option>-- Expiration Year --</option>
                  <option value="2023"> 2023 </option>
                  <option value="2024"> 2024 </option>
                  <option value="2025"> 2025 </option>
                  <option value="2026"> 2026 </option>
                  <option value="2027"> 2027 </option>
                  <option value="2028"> 2028 </option>
                  <option value="2029"> 2029 </option>
                </select>
							</form>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
            
								<form>
									<input type="text" placeholder="Company Name">
									<input type="text" name="name" placeholder="Email*" required>
									<input type="text" placeholder="Title">
									<input type="text" placeholder="First Name *">
									<input type="text" placeholder="Middle Name">
									<input type="text" placeholder="Last Name *">
									<input type="text" placeholder="Address 1 *">
									<input type="text" placeholder="Address 2">
								</form>
							</div>

							<div class="form-two">
								<form>
									<input type="text" placeholder="Zip / Postal Code *">
									<select>
										<option>-- Country --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<input type="text" placeholder="Phone *" required>
									<input type="text" placeholder="Mobile Phone">
									<input type="text" placeholder="Fax">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
					<!--		<label><input type="checkbox"> Shipping to bill address</label> -->
						</div>
					</div>
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

            <?php

              $id = $_POST['id'];
              $item_name = $_POST['item_name'];
              $price = $_POST['price'];
              $qty = $_POST['qty'];
              $total = $_POST['total'];   

             ?>

						<tr>
							<td class="cart_product">
								<p><?php echo "$item_name"; ?></p>
							</td>
							<td class="cart_description">
							<!	<h4><a href=""></a></h4>
								<p></p>
							</td>
							<td class="cart_price">
								<p><?php echo "$price"; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<!-- <a class="cart_quantity_up" href=""> + </a> -->
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo "$qty"; ?>" autocomplete="off" size="2">
								<!--	<a class="cart_quantity_down" href=""> - </a> -->
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($total,2) ; ?></p>
							</td>
						</tr>

						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td><?php echo number_format($total,2) ?></td>
									</tr>

									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>
									</tr>
									<tr>
										<td>Total</td>
										<td><span><?php echo number_format($total,2); ?></span></td>
									</tr>
                  <tr>
                    <td>
                    <form class="" action="thanks.php" method="post">
                      <button type="submit" class="btn btn-primary" name="button">Confirm Order</button>
                    </form>

                    <?php

                      $date = date("Y/m/d");

                      $sql = " INSERT INTO sell (product_name,price,Items,purchase_date,product_idproduct,user_iduser) VALUES ('$item_name','$price','$qty','$date','$id','$sess') ";
                      if (!mysqli_query($conn,$sql)) {
                        die('Error: '. mysqli_error($conn));
                      }


                     ?>

                    </td>
                  </tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</section> <!--/#cart_items-->



  <footer id="footer"><!--Footer-->
    <div class="footer-top">
      <div class="container"> </div>
    </div>

    <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="single-widget">
              <h2>About Sparkle</h2>
              <form action="#" class="searchform">
                <input type="text" placeholder="Your email address" />
                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                <p>Get the most recent updates from <br />our site and be updated your self...</p>
              </form>
            </div>
          </div>


          <div class="col-sm-4 ">
            <div class="single-widget">
              <h2>Pages</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="cloth_list.php">Shop Now</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="pull-left">Copyright © 2023 <strong>sparkleclothing</strong> All rights reserved</p>
          <p class="pull-right"><span></span></p>
        </div>
      </div>
    </div>

  </footer><!--/Footer-->



    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
