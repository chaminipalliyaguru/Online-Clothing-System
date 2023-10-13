<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Sparkle</title>
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
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
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
								<li><a href="about_us.php">About us</a></li>
								<li><a href="contact-us.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">

        <style type="text/css">
          @import "compass/css3";
          body{
            padding:;
            }
        </style>

        <?php
          $success="";
          if (isset($_GET['success'])) {
            $success = $_GET['success'];
          }

          if ($success == 1) {
            echo '
              <div class="alert alert-success" role="alert">
                  <strong>Account Created Successfully ! Please Login !</strong>
              </div> ';
              }
        ?>

        <script type="text/javascript">
            window.setTimeout(function() {
              $(".alert").fadeTo(2000, 500).slideUp(1000, function(){
                $(this).remove();
                });
            }, 2000);
        </script> 

				<div class="col-sm-4 col-sm-offset-1 ">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>

						<form action="includes/login_check.php" method="post">
							<input type="text" name="email" placeholder="User Name" required/>
							<input type="password" name="password" placeholder="Password" required/>
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>

					</div><!--/login form-->
				</div>

				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>

				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="includes/sign_up.php" method="post">
							<input type="text" name="fname" placeholder="Full Name" required/>
							<input type="text" name="user_name" placeholder="User Name " required/>
							<input type="password" name="password" placeholder="Password" required/>
							<input type="text" name="address" placeholder="Address" required/>
							<input type="text" name="contact_no" placeholder="Contact No" required/>
							<input type="email" name="email" placeholder="Email" required/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div>
				</div>


			</div>
		</div>
	</section><!--/form-->


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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
