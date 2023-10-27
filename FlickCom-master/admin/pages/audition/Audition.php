<?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flick:Audition</title>
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
                            <span>Me</span>
                            <div id="more-details"><i class="fa fa-chevron-down m-l-5"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-unstyled">
                            <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item">
                        <a href="Members-index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
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
    
 <br><br><br><br><br><br><br>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">



    
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
              <div class="container-fluid">
          <div class="row">
            <div class="col-md-5">
              <div class="card">
                <form class="form-horizontal" method="post" action="AdingAudition.php" name="registration" class="registartion-form" onsubmit="return function()>

                <?php
if(isset($_REQUEST['message']))
{
    $msg=$_REQUEST['message'];
    echo'<tr><td colspan="2" style="color:#FF0000" align="center">'.$mgs.'</td></tr>';
}
?>

                  <div class="card-body">


                  <center>
                    <h4 class="card-title">Schedule Audition</h4>
                  </center>

                     <div class="form-group row">
                      <label
                        for="feild"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Category*</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="text"
                          class="form-control"
                          id="feild" name="feild"
                          list="defaultEmails" size="64" maxlength="256" multiple placeholder="Vaccancy Feilds" required
                        />
                        <datalist id="defaultEmails">
                       
                            <option value="Editing">
                            <option value="Cinematographer">
                            <option value="Casting">
                            <option value="Camera Operator">
                            <option value="Film Crew">
                            <option value="Production Assistant">
                            <option value="Sound Engineer">
                            <option value="Musician">
                           </datalist>
                        
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="skills"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Skills*</label
                      >
                      <div class="col-sm-7">
                         <input
                          type="text"
                          class="form-control"
                          id="skills" name="skills"
                          list="defaultEmails" size="64" maxlength="256" multiple placeholder="Vaccancy Feilds" required
                        />
                        <datalist id="defaultEmails">

                            <option value="Electrical Engineering">
                            <option value="Bsc.Digital Filmmaking">
                            <option value="cinematography">
                            <option value="MSc in Cinema.">
                            <option value="MA in Film Studies.">
                            <option value="MSc in Film & TV Production">
                            <option value="BA Animation">
                              <option value="BA (Hons)Digital Content Creation">
                       </datalist>
                    </div>
                   
                    <div class="form-group row">
                      <label
                        for="qualification"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Qualification</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="text"
                          class="form-control"
                          id="qualification" name="qualification" 
                          placeholder="Select qualification" required
                        />
                        <select>
                            <option value="Electrical Engineering">
                            <option value="Bsc.Digital Filmmaking">
                            <option value="cinematography">
                            <option value="MSc in Cinema.">
                            <option value="MA in Film Studies.">
                            <option value="MSc in Film & TV Production">
                            <option value="BA Animation">
                              <option value="BA (Hons)Digital Content Creation">
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="venue"
                        class="col-sm-3 text-end control-label col-form-label"
        >Venue*</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="text"
                          class="form-control"
                          id="venue" name="venue"
                          placeholder="Enter Venue" required 
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="deadline"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Date*</label
                      >
                      <div class="col-sm-7">
                        <input
                          type="date"
                          class="form-control"
                          id="date" name="date"
                          placeholder="Date of last submition" min='2022-01-01' max='2023-01-01' required
                        /><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        var today = new Date();
        var month = ('0' + (today.getMonth() + 1)).slice(-2);
        var day = ('0' + today.getDate()).slice(-2);
        var year = today.getFullYear();
        var date = year + '-' + month + '-' + day;
        $('[id*=date]').attr('min', date);
    });
</script>

                      </div>
                      
                    </div>
                  </div>
                  <center><button type = "submit" name="submit" class="btn btn-success" ><i class="feather mr-2 icon-check-circle"></i>Schedule Audition</button>
                 </center>
                </form>
            </div>
        </div>
        </div>
        </div>

            
            
           
             
            </div>
            <!-- Latest Customers end -->
        </div>






        <!-- [ Main Content ] end -->
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
<?php
}
else
{
  header("location:../../../login.php");
}
?>