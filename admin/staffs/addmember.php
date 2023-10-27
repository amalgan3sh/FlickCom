<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flick:Admin-AddMembers</title>
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
    <link rel="stylesheet" href="assets/css/style.css">
    
    
    

</head>
<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar  ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div " >
                
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                        <div class="user-details">
                            <span>Admin</span>
                            
                    </div>
                    
                </div>
                
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    
                </ul>
                
                
                
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start --> 

    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        
            
                <div class="m-header">
                    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                    <a href="#!" class="b-brand">
                        <!-- ========   change your logo hear   ============ -->
                        <img src="assets/images/logo.png" alt="" class="logo">
                        <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
                    </a>
                    <a href="#!" class="mob-toggler">
                        <i class="feather icon-more-vertical"></i>
                    </a>
                </div>
                
                
            
    </header>
    <!-- [ Header ] end -->
    
    <br><br><br><br>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">



    
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
              <div class="container-fluid">
          <div class="row">
            <div class="col-md-7">
              <div class="card">
                <form class="form-horizontal" method="post" action="memberadd.php" name="myform" class="registartion-form" onsubmit="return validateform()>

                <?php
if(isset($_REQUEST['message']))
{
    $msg=$_REQUEST['message'];
    echo'<tr><td colspan="2" style="color:#FF0000" align="center">'.$mgs.'</td></tr>';
}
?>

                  <div class="card-body">


                  <center>
                    <h4 class="card-title">Add New Staff</h4>
                  </center>

                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >First Name*</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="fname"
                          placeholder="First Name Here" title="Start with a Capital letter & Only alphabets without space are allowed!!" required onchange="Validate();"
                        /><span id="msg2" style="color:red;"></span>
                      </div>
                      <script>    
function Validate() 
{
    var val = document.getElementById('fname').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('fname').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>


                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Last Name*</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="text"
                          class="form-control"
                          id="lname" name="lname"
                          placeholder="Last Name Here" title="Start with a Capital letter & Only alphabets without space are allowed!!" required onchange="Val();" 
                        /><span id="msg1" style="color:red;"></span>
                      </div>
                      <script>    
function Val() 
{
    var val = document.getElementById('lname').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('lname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>

                    </div>


                      <div class="form-group row">
                      <label
                        for="email"
                        class="col-sm-3 text-end control-label col-form-label"
                        >User Name*</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="text"
                          class="form-control"
                          id="email" name="email"  
                          placeholder="your email" title="Enter a Valid Email" required onchange="return Validata();"
                        /><span id="msg15" style="color:red;"></span>
                      </div>

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
                    
                    <div class="form-group row">
                      <label
                        for="password"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Password</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="password"
                          class="form-control"
                          id="password" name="password"
                          placeholder="Password Here" 
  title="Password must be at least 6 characters long." required onchange="return Validp();"
                        /><span id="msg9" style="color:red;"></span>
                      </div>
                      <script>    
function Validp() 
{
    var val = document.getElementById('password').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,15}$/)) 
    {
        document.getElementById('msg9').innerHTML="Password should contain atleast 6 characters";
    
         document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg9').innerHTML=" ";
    return true;
}

</script>

                    </div>
                    <div class="form-group row">
                      <label
                        for="Designation"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Designation*</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="text"
                          class="form-control"
                          id="feild" name="feild"
                          list="defaultEmails" size="64" maxlength="256" multiple placeholder="Designation" required
                        />
                        <datalist id="defaultEmails">
                            <option value="Video Editor">
                            <option value="Cinematographer">
                            <option value="Choreogrpher">
                            <option value="Camera Operator">
                            <option value="Film Crew">
                            <option value="Production Assistant">
                            <option value="Sound Engineer">
                        </datalist>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="type"
                        class="col-sm-3 text-end control-label col-form-label"
                        >User Type*</label
                      >
                      <div class="col-sm-7">
                        User <input type="radio" name="type" value="1" required>
                        Fresher <input type="radio" name="type" value="2" required>
                        Members <input type="radio" name="type" value="3" required>
                      </div>
                    </div>
                  </div>
                  <center><button type = "submit" name="submit" class="btn btn-success" ><i class="feather mr-2 icon-check-circle"></i>ADD</button>
                 </center>
                </form>
            </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>



    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>