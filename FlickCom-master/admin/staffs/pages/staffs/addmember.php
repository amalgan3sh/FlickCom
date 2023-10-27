<?php
include('connectivity.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FlickCom Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            
          </div>
      
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
         
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          
          
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><center>Add New Staff</center></h4><br><br>
                    
                    <form class="form-horizontal" method="post" action="memberadd.php" name="myform" class="registartion-form" onsubmit="return validateform()>
                      <div class="form-group">
                        <label for="fname"
                        ><b>First Name*</b></label>
                        <input type="text"
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
<div class="card-body">
                      <div class="form-group">
                        <label for="lname"
                        ><b>Last Name*</b></label>
                        <input type="text"
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
                      <div class="form-group">
                        <label for="email"
                        ><b>Username*</b></label>
                        <input type="text"
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
                      <div class="form-group">
                        <label for="password"
                        ><b>Password*</b></label>
                        <input type="password"
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
                      <div class="form-group">
                        <label for="Designation"
                        ><b>Designation*</b></label>
                        <input type="text"
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
                      <div class="form-group">
                        <label for="type"
                        ><b>User Type*</b></label>
                        <div class="col-sm-7">
                        User <input type="radio" name="type" value="1" required>
                        Fresher <input type="radio" name="type" value="2" required>
                        Members <input type="radio" name="type" value="3" required>
                      </div>
                      </div></div>
                      <div class="form-check form-check-flat form-check-primary">
                       
                      </div>
                      <center><button type = "submit" name="submit" class="btn btn-success" ><i class="feather mr-2 icon-check-circle"></i>ADD</button>
                 </center>
                      <button class="btn btn-light">Cancel</button>
                      
                    </form>
                  </div>
                </div>
              </div>
             
              
      
            </div>
          </div></div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>