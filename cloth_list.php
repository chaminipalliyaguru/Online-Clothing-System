<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sparkle</title>
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

  <?php include("includes/DB.php");
  session_start();

  $ss = 0;
  if (isset($_SESSION['iduser'])) {
    $ss = $_SESSION['iduser'];
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
							  <li><a href="#"><em class="fa fa-phone"></em>0332238287</a></li>
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
							<a href="index.php"><img src="images/home/logo.png" height="30%" width="40%"></a>
						</div>
					</div>

          <?php
            $id = 0;
            $fname = "";
            $result = mysqli_query($conn, "SELECT * FROM user WHERE iduser='$ss' ");
            while ($row = mysqli_fetch_array($result)) {
              $id = $row['iduser'];
              $fname = $row['full_name'];
            }
          ?>

          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <li><a href="customer_profile.php"> <?php echo $fname; ?> </a></li>
                <li>
                  <?php
                      if (isset($_SESSION['iduser'])) {
                          echo '<a href="includes/logout.php"><i class="fa fa-sign-out"></i> LOGOUT </a>';
                      } else {
                          echo '<a href="login.php"><i class="fa fa-lock"></i> Login</a>';
                      }
                       ?>
                </li>
              </ul>
          </div>
        </div>
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
								<li><a href="cloth_list.php" class="active">Shop Now</a></li>
								<li><a href="about_us.php">About Us</a></li>
								<li><a href="contact-us.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

		<section id="advertisement">
		<div class="container">
			<img src="images/shop/banner.jpg" alt="" />
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">


				<div class="col-sm-12 ">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

            <?php

                $path = "admin/includes/uploads/";
                $result = mysqli_query($conn, "SELECT * FROM product WHERE Category_idCategory = '1' ");
                while ($row= mysqli_fetch_array($result)) {
                    $id=$row['idproduct'];
                    $name=$row['product_name'];
                    $price=$row['product_price'];
                    $desc = $row['product_description'];
                    $image = $row['image'];
                    $qua = 1;

                    if (isset($_SESSION['iduser'])) {
                      echo '
                      <div class="col-sm-3">
                      <div class="product-image-wrapper">
                      <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="'.$path.''.$image.' " alt="" />
                            <h2>Rs.'.$price.'.00</h2>
                            <p>'.$name.'</p>
                            <form action="includes/add_to_cart.php" method="post">
                            <input type="hidden" name="id_product" value="'.$id.'"/>
                            <input type="hidden" name="item_name" value="'.$name.' "/>
                            <input type="hidden" name="price" value="'.$price.' "/>
                            <input type="hidden" name="qty" value="'.$qua.' "/>
                            <inout type="hidden" name="image" value"'.$image.' "/>
                            <input type="hidden" name="path" value="'.$path.' "/>
                             <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </form>
                          </div>

                          <div class="product-overlay">
                            <div class="overlay-content">
                              <h2>'.$desc.'</h2>
                              <h2>Rs.'.$price.'.00</h2>
                              <p>'.$name.'</p>
                              <form action="includes/add_to_cart.php" method="post">
                              <input type="hidden" name="id_product" value="'.$id.'"/>
                              <input type="hidden" name="item_name" value="'.$name.' "/>
                              <input type="hidden" name="price" value="'.$price.' "/>
                              <input type="hidden" name="qty" value="'.$qua.' "/>
                              <inout type="hidden" name="image" value"'.$image.' "/>
                              <input type="hidden" name="path" value="'.$path.' "/>
                               <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                               </form>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>';

                    }else {
                      echo '
                      <div class="col-sm-3">
                      <div class="product-image-wrapper">
                      <div class="single-products">
                          <div class="productinfo text-center">
                            <img src=" '.$path.''.$image.' " alt="" />
                            <h2>Rs.'.$price.'.00</h2>
                            <p>'.$name.'</p>
                            <a href="login.php"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Login</button></a>
                          </div>

                          <div class="product-overlay">
                            <div class="overlay-content">
                              <h2>'.$desc.'</h2>
                              <h2>Rs.'.$price.'.00</h2>
                              <p>'.$name.'</p>
                              <a href="login.php"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Login</button></a>
                            </div>
                          </div>
                        </div>
                        </div>
                        </div>';
                    }
                }

              ?>

              <?php

                  $path = "admin/includes/uploads/";
                  $result = mysqli_query($conn, "SELECT * FROM product WHERE Category_idCategory = '2' ");
                  while ($row= mysqli_fetch_array($result)) {
                      $id=$row['idproduct'];
                      $name=$row['product_name'];
                      $price=$row['product_price'];
                      $desc = $row['product_description'];
                      $image = $row['image'];

                      if (isset($_SESSION['iduser'])) {
                        echo '
                        <div class="col-sm-3">
                        <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                              <img src=" '.$path.''.$image.' " alt="" />
                              <h2>Rs.'.$price.'.00</h2>
                              <p>'.$name.'</p>
                              <form action="includes/add_to_cart.php" method="post">
                              <input type="hidden" name="id_product" value="'.$id.'"/>
                              <input type="hidden" name="item_name" value="'.$name.' "/>
                              <input type="hidden" name="price" value="'.$price.' "/>
                              <input type="hidden" name="qty" value="'.$qua.' "/>
                              <inout type="hidden" name="image" value"'.$image.' "/>
                              <input type="hidden" name="path" value="'.$path.' "/>
                               <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                              </form>
                            </div>

                            <div class="product-overlay">
                              <div class="overlay-content">
                                <h2>'.$desc.'</h2>
                                <h2>Rs.'.$price.'.00</h2>
                                <p>'.$name.'</p>
                                <form action="includes/add_to_cart.php" method="post">
                                <input type="hidden" name="id_product" value="'.$id.'"/>
                                <input type="hidden" name="item_name" value="'.$name.' "/>
                                <input type="hidden" name="price" value="'.$price.' "/>
                                <input type="hidden" name="qty" value="'.$qua.' "/>
                                <inout type="hidden" name="image" value"'.$image.' "/>
                                <input type="hidden" name="path" value="'.$path.' "/>
                                 <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                 </form>
                                </div>
                              </div>
                            </div>
                            </div>
                          </div>';

                      }else {
                        echo '
                        <div class="col-sm-3">
                        <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                              <img src=" '.$path.''.$image.' " alt="" />
                              <h2>Rs.'.$price.'.00</h2>
                              <p>'.$name.'</p>
                              <a href="login.php"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Login</button></a>
                            </div>

                            <div class="product-overlay">
                              <div class="overlay-content">
                                <h2>'.$desc.'</h2>
                                <h2>Rs.'.$price.'.00</h2>
                                <p>'.$name.'</p>
                                <a href="login.php"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Login</button></a>
                              </div>
                            </div>
                          </div>
                          </div>
                          </div>';
                      }

                  }

                ?>

                <?php

                    $path = "admin/includes/uploads/";
                    $result = mysqli_query($conn, "SELECT * FROM product WHERE Category_idCategory = '3' ");
                    while ($row= mysqli_fetch_array($result)) {
                        $id=$row['idproduct'];
                        $name=$row['product_name'];
                        $price=$row['product_price'];
                        $desc = $row['product_description'];
                        $image = $row['image'];

                        if (isset($_SESSION['iduser'])) {
                          echo '
                          <div class="col-sm-3">
                          <div class="product-image-wrapper">
                          <div class="single-products">
                              <div class="productinfo text-center">
                                <img src=" '.$path.''.$image.' " alt="" />
                                <h2>Rs.'.$price.'.00</h2>
                                <p>'.$name.'</p>
                                <form action="includes/add_to_cart.php" method="post">
                                <input type="hidden" name="id_product" value="'.$id.'"/>
                                <input type="hidden" name="item_name" value="'.$name.' "/>
                                <input type="hidden" name="price" value="'.$price.' "/>
                                <input type="hidden" name="qty" value="'.$qua.' "/>
                                <inout type="hidden" name="image" value"'.$image.' "/>
                                <input type="hidden" name="path" value="'.$path.' "/>
                                 <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </form>
                              </div>

                              <div class="product-overlay">
                                <div class="overlay-content">
                                  <h2>'.$desc.'</h2>
                                  <h2>Rs.'.$price.'.00</h2>
                                  <p>'.$name.'</p>
                                  <form action="includes/add_to_cart.php" method="post">
                                  <input type="hidden" name="id_product" value="'.$id.'"/>
                                  <input type="hidden" name="item_name" value="'.$name.' "/>
                                  <input type="hidden" name="price" value="'.$price.' "/>
                                  <input type="hidden" name="qty" value="'.$qua.' "/>
                                  <inout type="hidden" name="image" value"'.$image.' "/>
                                  <input type="hidden" name="path" value="'.$path.' "/>
                                   <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                   </form>
                                  </div>
                                </div>
                              </div>
                              </div>
                            </div>';

                        }else {
                          echo '
                          <div class="col-sm-3">
                          <div class="product-image-wrapper">
                          <div class="single-products">
                              <div class="productinfo text-center">
                                <img src=" '.$path.''.$image.' " alt="" />
                                <h2>Rs.'.$price.'.00</h2>
                                <p>'.$name.'</p>
                                <a href="login.php"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Login</button></a>
                              </div>

                              <div class="product-overlay">
                                <div class="overlay-content">
                                  <h2>'.$desc.'</h2>
                                  <h2>Rs.'.$price.'.00</h2>
                                  <p>'.$name.'</p>
                                  <a href="login.php"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Login</button></a>
                                </div>
                              </div>
                            </div>
                            </div>
                            </div>';
                        }
                    }

                  ?>


                  <?php

                      $path = "admin/includes/uploads/";
                      $result = mysqli_query($conn, "SELECT * FROM product WHERE Category_idCategory = '4' ");
                      while ($row= mysqli_fetch_array($result)) {
                          $id=$row['idproduct'];
                          $name=$row['product_name'];
                          $price=$row['product_price'];
                          $desc = $row['product_description'];
                          $image = $row['image'];

                          if (isset($_SESSION['iduser'])) {
                            echo '
                            <div class="col-sm-3">
                            <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                  <img src=" '.$path.''.$image.' " alt="" />
                                  <h2>Rs.'.$price.'.00</h2>
                                  <p>'.$name.'</p>
                                  <form action="includes/add_to_cart.php" method="post">
                                  <input type="hidden" name="id_product" value="'.$id.'"/>
                                  <input type="hidden" name="item_name" value="'.$name.' "/>
                                  <input type="hidden" name="price" value="'.$price.' "/>
                                  <input type="hidden" name="qty" value="'.$qua.' "/>
                                  <inout type="hidden" name="image" value"'.$image.' "/>
                                  <input type="hidden" name="path" value="'.$path.' "/>
                                   <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                  </form>
                                </div>

                                <div class="product-overlay">
                                  <div class="overlay-content">
                                    <h2>'.$desc.'</h2>
                                    <h2>Rs.'.$price.'.00</h2>
                                    <p>'.$name.'</p>
                                    <form action="includes/add_to_cart.php" method="post">
                                    <input type="hidden" name="id_product" value="'.$id.'"/>
                                    <input type="hidden" name="item_name" value="'.$name.' "/>
                                    <input type="hidden" name="price" value="'.$price.' "/>
                                    <input type="hidden" name="qty" value="'.$qua.' "/>
                                    <inout type="hidden" name="image" value"'.$image.' "/>
                                    <input type="hidden" name="path" value="'.$path.' "/>
                                     <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                     </form>
                                    </div>
                                  </div>
                                </div>
                                </div>
                              </div>';

                          }else {
                            echo '
                            <div class="col-sm-3">
                            <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                  <img src=" '.$path.''.$image.' " alt="" />
                                  <h2>Rs.'.$price.'.00</h2>
                                  <p>'.$name.'</p>
                                  <a href="login.php"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Login</button></a>
                                </div>

                                <div class="product-overlay">
                                  <div class="overlay-content">
                                    <h2>'.$desc.'</h2>
                                    <h2>Rs.'.$price.'.00</h2>
                                    <p>'.$name.'</p>
                                    <a href="login.php"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Login</button></a>
                                  </div>
                                </div>
                              </div>
                              </div>
                              </div>';
                          }
                      }
                    ?>

					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container"> </div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>About Shopper</h2>
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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
