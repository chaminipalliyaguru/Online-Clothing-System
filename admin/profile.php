<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include("includes/DB.php") ?>
    <?php session_start();?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Style Mart | Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../images/home/favicon.png" />
  </head>

  <?php
	   	$session_id= 0;
      if (isset($_SESSION['idAdmin'])) {
      $session_id= $_SESSION['idAdmin'];
      }
	?>

  <?php

	 $idAdmin = 0;
	 $Admin_name = "";
	 $Admin_password = "";
	 $email = "";
	 $contact_no = "";

	 $result = mysqli_query($conn, "SELECT * FROM admin WHERE idAdmin = '$session_id' ");
   while ($row = mysqli_fetch_array($result)) {
	    $idAdmin = $row['idAdmin'];
		  $Admin_name = $row['Admin_name'];
		  $Admin_password = $row['Admin_password'];
		  $email = $row['email'];
		  $contact_no = $row['contact_no'];
 	}

  ?>

        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;}
            }
        </style>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a href="dashboard.php"><img src="assets/images/dashboard/logo.png" style="width: 100px"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">

          <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="includes/logout.php">
                <i class="mdi mdi-power"></i>
              </a>
            </li>

          </ul>

        </div>
      </nav>
              <br> <br> <br> <br>

            <style type="text/css">
                @import "compass/css3";
                body{
                  padding: ;
                    }
              </style>

              <?php
                $respon="";
                if (isset($_GET['respon'])) {
                  $respon = $_GET['respon'];
                }

                if ($respon == 1) {
                  echo '
                    <div class="alert alert-success" role="alert">
                      <strong>Admin Details Updated !</strong>
                    </div> ';
                }
              ?>

              <script type="text/javascript">
                  window.setTimeout(function() {
                    $(".alert").fadeTo(2000, 500).slideUp(1000, function(){
                      $(this).remove();
                        });
                        }, 2000);
              </script> <br>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face26.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo "$Admin_name"; ?></span>
                  <span class="text-secondary text-small"><?php echo "$email"; ?></span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_new_admin.php">
                <span class="menu-title">Accounts</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage_accounts.php">
                <span class="menu-title">Manage Accounts</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">
                <span class="menu-title">Profile</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_category.php">
                <span class="menu-title">Add Category</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage_category.php">
                <span class="menu-title">Manage Category</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_product.php">
                <span class="menu-title">Add Product</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			      <li class="nav-item">
              <a class="nav-link" href="manage_product.php">
                <span class="menu-title">Manage Product</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_supplier.php">
                <span class="menu-title">Add Supplier</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage_supplier.php">
                <span class="menu-title">Manage Supplier</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>

          </ul>
        </nav>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="col-sm-12">
		            <h1>Update Admin Details</h1> <br>

                    <form action="includes/profile_edit.php" method="post" >
                          <div class="form-group">
                            <label for="email">Administrator Name:</label>
                            <input type="text" class="form-control" id="email" name="name" value="<?php echo "$Admin_name"; ?>">
                          </div>

                          <div class="form-group">
                            <label for="email">Administrator Password:</label>
                            <input type="text" class="form-control" id="email" name="pwd" value="<?php echo "$Admin_password"; ?>">
                          </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo "$email"; ?>">
                            </div>

                            <div class="form-group">
                                <label for="email">Contact No</label>
                                <input type="text" class="form-control" id="email" name="cont" value="<?php echo "$contact_no"; ?>">
                            </div>

                            <button type="submit" class="btn btn-success">Update Details</button>
                        </form>

                    </div>


          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 | Final Project <a href="#" target="">Style Mart | Nipuni Weerawardhana</a>. All rights reserved.</span>
            <!--  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> -->
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
