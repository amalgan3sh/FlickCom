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



    
    <form method="post" action="adding.php" name="registration" class="registartion-form" onsubmit="return validateForm()">
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
            <h4 class="f-w-500">Sign up</h4>
            <hr>
            <div class="form-group mb-3">
              <label>First Name</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name*" title="Start with a Capital letter & Only alphabets without space are allowed!!" value = "" required onchange="Validate();"> <span id = "blankMsg" style="color:red"> </span>
              <script>    
function Validate() 
{
    var val = document.getElementById('fname').value;

    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
    {
        document.getElementById('blankMsg').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('fname').value = "";
        return false;
    }
document.getElementById('blankMsg').innerHTML=" ";
    return true;
}
</script>
            </div>

            <div class="form-group mb-3">
              <label>Last Name</label>
              <input type="text" class="form-control" name="lname" id = "lname" title="Start with a Capital letter & Only alphabets without space are allowed!!" placeholder="Last name*" value = "" required onchange="Val();"><span id = "charMsg" style="color:red"> </span>
              <script>    
function Val() 
{
    var val = document.getElementById('lname').value;

    if (!val.match(/^[A-Z][A-Za-z]{0,}$/)) 
    {
        document.getElementById('charMsg').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('lname').value = "";
        return false;
    }
document.getElementById('charMsg').innerHTML=" ";
    return true;
}
</script>



            </div>

            <div class="form-group mb-4">
              <label>User Name</label>
              <input type="text" class="form-control" name="email" id="email" title="Enter a Valid Email" placeholder="your email*" required onchange="return Validata();"
                        /><span id="msg15" style="color:red;"></span>
                        <script>    
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg15').innerHTML="Enter a Valid Email";
    
         document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg15').innerHTML=" ";
    return true;
}
</script>
            </div>

            

            <div class="form-group mb-4">
              <label>Password</label>
              <input type="password" class="form-control" name="pswd1" id ="pswd1" title="**Password must be at least 6 characters long." placeholder="create a new password*" value = "" required onchange="return Valipswd();"
                        /><span id="msg9" style="color:red;"></span>
                        <script>    
function Valipswd() 
{
    var val = document.getElementById('pswd1').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,15}$/)) 
    {
        document.getElementById('msg9').innerHTML="Password should contain atleast 6 characters";
    
         document.getElementById('pswd1').value = "";
        return false;
    }
document.getElementById('msg9').innerHTML=" ";
    return true;
}

</script>
            </div>

            

            <div class="form-group mb-4">
              <label>Confirm Password</label>
              <input type="password" class="form-control" name="pswd2" id = "pswd2" title="Must be match with password" placeholder="re-enter your password*" value = "" required="" onchange="return check();"><span id="msg17" style="color:red;"></span>
              <script>
  function check()
{
var pas1=document.getElementById("pswd1");
                var pas2=document.getElementById("pswd2");
              
                if(pas1.value=="")
  {
    document.getElementById('msg17').innerHTML="Password can't be null!!";
    pas1.focus();
    return false;
  }
  if(pas2.value=="")
  {
    document.getElementById('msg17').innerHTML="Please confirm password!!";
    pas2.focus();
    return false;
  }
  if(pas1.value!=pas2.value)
  {
    document.getElementById('msg17').innerHTML="Passwords does not match!!";
    pas1.focus();
    return false;
  }
     document.getElementById('msg17').innerHTML=" "; 
  return true;
  
}
  </script>
            </div>

            

            <div class="form-group mb-4">
              <label>Mobile</label>
              <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" title="Enter 10 digit mobile number" placeholder="enter your mobile" required="" onchange="Validphn();">
              <span id="msg4" style="color:red;"></span>
          <script>
function Validphn() 
{
    var val = document.getElementById('phoneNumber').value;

    if (!val.match(/^[7-9][0-9]{9,10}$/)) 
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
  
    
                document.getElementById('phoneNumber').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
            </div>

            

            <div class="form-group mb-4">
              <label for="gender">Gender*</label>
              Male <input type="radio" name="gender" value="male" required>
              Female <input type="radio" name="gender" value="female" required>
              Other <input type="radio" name="gender" value="other" required>
            </div>

            

            <div class="form-group mb-4">
              <label>User Type*     </label>
              User <input type="radio" name="type" id="type" value="1" required>
              Fresher <input type="radio" name="type" id="type" value="2" required>
            </div>
            </div>

            

            <input type = "submit" name="submit" id="submit" class="btn btn-block btn-primary mb-3"  value = "Register">
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
