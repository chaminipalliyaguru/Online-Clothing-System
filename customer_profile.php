<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Sparkle | Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

  <?php include("includes/DB.php") ?>
  <?php session_start();

  $session_id= 0;
  if (isset($_SESSION['iduser'])) {
    $session_id= $_SESSION['iduser'];
  }

  $iduser = 0;
  $full_name = "";
  $user_name = "";
  $password = "";
  $address = "";
  $con_no = "";
  $email = "";

  $result = mysqli_query($conn, "SELECT * FROM user WHERE iduser = '$session_id' ");
  while ($row = mysqli_fetch_array($result)) {
    $iduser = $row['iduser'];
    $full_name = $row['full_name'];
    $user_name = $row['User_name'];
    $password = $row['Password'];
    $address = $row['Address'];
    $con_no = $row['Contact_no'];
    $email = $row['email'];
      }
    ?>

<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo $full_name; ?></h1></div>
    	<div class="col-sm-2"><a href="includes/logout.php" class="pull-right"><img title="Log Out" class="img-circle img-responsive" src="images/home/logout.jpg"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->


      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
      <!--  <h6>Upload a Different Photo...</h6>
        <form action="" method="post">
        <input type="file" class="text-center center-block file-upload">
      </form>-->
    </div></hr><br>

        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Profile Info</a></li>
                <li><a data-toggle="tab" href="#update">Update Profile</a></li>
				        <li><a data-toggle="tab" href="#puchased">Purchased Items</a></li>
              </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="first_name"><h4>Full Name</h4></label>
                              <input type="text" class="form-control" name="full_name" id="first_name" value="<?php echo "$full_name"; ?>" placeholder="Full Name" title="enter your first name if any." disabled>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="last_name"><h4>User Name</h4></label>
                              <input type="text" class="form-control" name="user_name" id="last_name" value="<?php echo "$user_name"; ?>" placeholder="User Name" title="enter your last name if any." disabled>
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="phone"><h4>Current Password</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" value="<?php echo "$password"; ?>" placeholder="enter phone" title="enter your phone number if any." disabled>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo "$address"; ?>" placeholder="enter mobile number" title="enter your mobile number if any." disabled>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4>Contact No</h4></label>
                              <input type="email" class="form-control" name="email" id="email" value="<?php echo "$con_no"; ?>" placeholder="you@email.com" title="enter your email." disabled>
                          </div>
                      </div>
                     <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" id="location" value="<?php echo "$email"; ?>" placeholder="somewhere" title="enter a location" disabled>
                          </div>
                      </div>
                    </form>

              <hr>

             </div><!--/tab-pane-->
             <div class="tab-pane" id="update">

               <h2></h2>

               <hr>
                  <form class="form" action="includes/customer_profile_edit.php" method="post" id="registrationForm">

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Full Name</h4></label>
                              <input type="text" class="form-control" name="full_name" id="first_name" value="<?php echo "$full_name"; ?>" placeholder="Full Name" title="enter your first name if any." >
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="last_name"><h4>User Name</h4></label>
                              <input type="text" class="form-control" name="user_name" id="last_name" value="<?php echo "$user_name"; ?>" placeholder="User Name" title="enter your last name if any.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Current Password</h4></label>
                              <input type="text" class="form-control" name="pwd" id="phone" value="<?php echo "$password"; ?>" placeholder="enter phone" title="enter your phone number if any." >
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="address" id="mobile" value="<?php echo "$address"; ?>" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Contact No</h4></label>
                              <input type="text" class="form-control" name="contact" id="email" value="<?php echo "$con_no"; ?>" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>

                     <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="location" value="<?php echo "$email"; ?>" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               <!--	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
                            </div>
                      </div>
              	</form>
             </div><!--/tab-pane-->

  <div class="tab-pane" id="puchased">
                  <hr>
          <section id="cart_items">
        		<div class="container">
        			<div class="breadcrumbs">
        				<ol class="breadcrumb">
        				  <li class="active">Purchased Items</li>
        				</ol>
        			</div>
        			<div class="table-responsive cart_info">
        				<table class="table table-condensed">
        					<thead>
        						<tr class="cart_menu">
        							<td >Product Name</td>
        							<td >Product Price</td>
        							<td >Quantity</td>
        							<td >Purchased Date</td>
        						</tr>
        					</thead>
        					<tbody>

                  <?php

                    $p_name = "";
                    $p_price = "";
                    $quanti = "";
                    $p_date = "";

                    $result = mysqli_query($conn, "SELECT * FROM sell WHERE user_iduser = '$session_id' ");
                    while ($row = mysqli_fetch_array($result)) {
                      $p_name = $row['product_name'];
                      $p_price = $row['price'];
                      $quanti = $row['items'];
                      $p_date = $row['purchase_date'];

                      echo '
                        <tr>
                          <td>'.$p_name.'</td>
                          <td>LKR '.number_format((float)$p_price, 2).'</td>
                          <td>'.$quanti.'</td>
                          <td>'.$p_date.'</td>
                        </tr> ';
                      }

                  ?>

      
        					</tbody>
        				</table>
        			</div>
        		</div>
        	</section>
              </div>

              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

<script type="text/javascript">

	$(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
        readURL(this);
    });
});

</script>
