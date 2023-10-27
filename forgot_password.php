  <?php
session_start();
include('connectivity.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>FlickCom:SignUp</title>
  <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="" />
  <meta name="keywords" content="">
  <meta name="author" content="Phoenixcoded" />
  <!-- Favicon icon -->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

  <!-- vendor css -->
  <link rel="stylesheet" href="css/style1.css">
  
  


</head>
<body>
<?php
include('connectivity.php');
?>



    
    <form method="post" action="reset_password.php" name="registration" class="registartion-form" >
<!-- Enter first name -->


<?php
if(isset($_REQUEST['message']))
{
    $msg=$_REQUEST['message'];
    echo'<tr><td colspan="9" style="color:#FF0000" align="center">'.$mgs.'</td></tr>';
}
?>
<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
  <div class="auth-content text-center">
    
    <div class="card borderless">
      <div class="row align-items-center text-center">
        <div class="col-md-12">
          <div class="card-body">
            <h4 class="f-w-500">Rest password</h4>
            <hr>
            <div class="form-group mb-3">
              <label>Your email ID</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email ID*"  value = "" required > <span id = "blankMsg" style="color:red"> </span>

            </div>

            <div class="form-group mb-3">
              <label>New Password</label>
              <input type="email" class="form-control" id="cpassword" name="cpassword" placeholder="New Password*"  value = "" required > <span id = "blankMsg" style="color:red"> </span>

            </div>



            <div class="form-group mb-3">
              <label>Confirm Password</label>
              <input type="email" class="form-control" id="password" name="password" placeholder="Confirm password*"  value = "" required > <span id = "blankMsg" style="color:red"> </span>

            </div>

            

          
            

            <input type = "submit" name="submit" id="submit" class="btn btn-block btn-primary mb-3"  value = "Change password">
            <hr>
            <p class="mb-2">Already have an account? <a href="login.php" class="f-w-400">SignIn</a></p>
            <p class="mb-2"><a href="index.php" class="f-w-400">Back</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
</body>

</html>
