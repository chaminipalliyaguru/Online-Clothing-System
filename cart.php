<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cart | Sparkle</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/price-range.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <script src="js/action.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <link rel="shortcut icon" href="images/home/logo2.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

  <?php
  include("includes/DB.php");
  session_start();

  $sess = 0;
  if (isset($_SESSION['iduser'])) {
    $sess = $_SESSION['iduser'];
  }

  $cart = "";
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
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
                  <li><a href="customer_profile.php">
                      <?php echo $fname; ?>
                    </a></li>
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
            <li class="active">Shopping Cart</li>
          </ol>
        </div>
        <div class="table-responsive cart_info">

          <?php

          global $cart;
          //sort($cart);
          $length=0;
          if (isset($_SESSION['cart'])) {
            $length = count($_SESSION['cart']);
          }

          echo '
<table class="table table-hover">
        <thead>
        <tr>
          <th></th>
          <th></th>
          <th>Product</th>
          <th>Qty</th>
          <th>Unit Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>';
          $i = 0;
          $total = 0;
          for ($x = 0; $x < $length; $x++) {
            $_SESSION['cart'][$x];
            $str1 = $_SESSION['cart'][$x];
            $str = explode("=", $str1);
            $product1 = $str[0];
            $p_name = $str[1];
            $p_up = $str[2];
            $p_qty = $str[3];
            $tot = (float) $p_up * $p_qty;
            $total += $tot;
            $i++;
            $ids = $product1 . "=" . $p_name . "=" . $p_up . "=" . $x . "=edit";
            $ids2 = $product1 . "=" . $p_name . "=" . $p_up . "=" . $x . "=delete";

            echo '
            <tr>
              <td>' . $i . '</td>
              <td><img src="" class="cart_img"/></td>
              <td>' . $p_name . '</td>
              <td>
                <div class="quantity"><input id="qty" name="" class="form-control" value="'.$p_qty.'" type="number" min="1" max="30" step="1" oninput="quantity();return false;"></div>
              </td>
              <td><input type="text" value="' . $p_up . '" id="price" class="form-control" disabled></td>
              <td><input type="text" value="' . $tot . ' "  id="tot" class="form-control" disabled></td>
              <td><a href="includes/session_clear.php?key='.$product1.'"><span class="label label-danger">X</span></a></td>
            </tr>';
          }

          echo '
          </tbody>
        </table>

        <ol class="breadcrumb" style="text-align:center;">
          <li class=" "><h4 class="my_shopping_cart" id="total">Total  LKR ' . $total . '</h4></li>
        </ol>';

          if ($length == 0) {
            echo '<a href="#"><button class="btn btn-primary">Proceed to checkout</button></a>';
          } else {
            echo '
            <form action="checkout.php" method="post">
              <input type="hidden" name="id" value=" ' . $product1 . ' "/>
              <input type="hidden" name="item_name" value=" ' . $p_name . ' "/>
              <input type="hidden" name="price" value=" ' . $p_up . ' "/>
              <input type="hidden" name="qty" id="qty2" value=" ' . $p_qty . ' "/>
              <input type="hidden" name="total" id="total2" value=" ' . $tot . ' "/>
              <button type="submit" class="btn btn-warning">Proceed to checkout</button>
            </form>';
          }

          ?>

          </tbody>
          </table>
        </div>
      </div>
    </section> <!--/#cart_items-->

    <!--/#do_action-->

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
                  <li><a href="contact_us.php">Contact Us </a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <p class="pull-left">Copyright © 2023 <strong>sparkleclothing</strong> All rights reserved </p>
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