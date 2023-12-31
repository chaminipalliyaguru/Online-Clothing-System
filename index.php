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

  	<?php
		  include("includes/DB.php");
		  session_start();

		  $sess= 0;
    	if (isset($_SESSION['iduser'])) {
    	$sess= $_SESSION['iduser'];
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
							<a href="index.php"><img src="images/home/logo.png" height="30%" width="40%"></a>
						</div>
					</div>

          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <li><a href="customer_profile.php"> <!--?php echo $fname; ?--> </a></li>
                <li>
                  <?php
                        if (isset($_SESSION['iduser'])) {
                          echo '
                  								<a href="includes/logout.php"><i class="fa fa-sign-out"></i> LOGOUT </a>
                  						';
                        } else {
                          echo '
                  								<a href="login.php"><i class="fa fa-lock"></i> Login</a>
                  							';
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
								<li><a href="index.php" class="active">Home</a></li>
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

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Pants</span></h1>
									<h2>Beautiful Pants - Different Different Types</h2>
									<p>Stunning and Stylish Pants  </p>
								</div>
								<div class="col-sm-6">
									<img src="images/home/slide3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Beautiful Tops</span></h1>
									<h2>Beautiful Occations - Beautiful Tops</h2>
									<p>Most Beautiful Tops for Eyeryone</p>
								</div>
								<div class="col-sm-6">
									<img src="images/home/slide2.jpg"class="girl img-responsive" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>Dresses</span></h1>
									<h2>Dresses for Every Occcasion</h2>
									<p>Every Occasion lights with Beautiful Dresses</p>
								</div>
								<div class="col-sm-6">
									<img src="images/home/slide1.jpg"class="girl img-responsive" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">

				<div class="col-sm-12 ">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/shop/pant7.jpg" alt="" />
											<h2>Rs.2800.00</h2>
											<p>Straight Cut Linon Pant</p>
											<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Click Here</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rs.2800.00</h2>
												<p>Straight Cut Linon Pant</p>
												<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Quick View</a>
											</div>
										</div>
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images\shop\top8.jpg" alt="" />
										<h2>Rs.3500.00</h2>
										<p>Ruffle Detailed Top</p>
										<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Click Here</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rs.3500.00</h2>
											<p>Ruffle Detailed Top</p>
											<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Quick View</a>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/dres3.jpg" alt="" />
										<h2>Rs.4800.00</h2>
										<p>Off The Shoulder Dress</p>
										<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Click Here</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rs.4800.00</h2>
											<p>Off The Shoulder Dress</p>
											<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Quick View</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/dres6.jpg" alt="" />
										<h2>Rs.3900.00</h2>
										<p>Waterfall Sleeve Dress'</p>
										<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Click Here</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rs.3900.00</h2>
											<p>Waterfall Sleeve Dress</p>
											<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Quick View</a>
										</div>
									</div>
									<!--<img src="images/home/new.png" class="new" alt="" /> -->
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/pant4.jpg"alt="" />
										<h2>Rs.5200.00</h2>
										<p>High-Waisted Jeans</p>
										<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Click Here</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rs.5200.00</h2>
											<p>High-Waisted Jeans</p>
											<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Quick View</a>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/top7.jpg" alt="" />
										<h2>Rs.2500.00</h2>
										<p>High Neck Blouse</p>
										<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Click Here</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rs.2500.00</h2>
											<p>High Neck Blouse</p>
											<a href="cloth_list.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Quick View</a>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div><!--features_items-->

				<!--/category-tab-->

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">New Arrivals</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/shop/newarraival1.jpg" alt="" />
													<h2>Rs.5000.00</h2>
													<p>Formal Pant</p>
											<!--		<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/shop/newarraival4.jpg"alt="" />
													<h2>Rs.2500.00</h2>
													<p>V-Neck Dress</p>
											<!--		<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/shop/newarraival2.jpg" alt="" />
													<h2>Rs.3900.00</h2>
													<p>White Plazo Pant</p>
											<!--		<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/shop/newarraival5.jpg"alt="" />
													<h2>Rs.3500.00</h2>
													<p>A Square Neck Dress'</p>
												<!--	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/shop/newarraival3.jpg" alt="" />
													<h2>Rs.4500.00</h2>
													<p>Long Sleeves Shirt</p>
											<!--		<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/shop/newarraival6.jpg" alt="" />
													<h2>Rs.4500.00</h2>
													<p>Printed CrossOver Dress</p>
												<!--	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>
						</div>
					</div><!--/recommended_items-->

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
								<li><a href="contact_us.php">Contact us</a></li>
                				<li><a href="admin/index.php">Admin Login</a></li>
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
