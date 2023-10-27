<?php
session_start();
if(isset($_SESSION['id']))
{
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
        
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
        
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          
         
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Me</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Change Password </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../../logout.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
           
            
            
           
          </ul>
          
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
         
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
           <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#add" aria-expanded="false" aria-controls="add">
                <span class="menu-title" >Add New</span>
                
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="add">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#"> Audition </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../vaccancy/vaccancy.php"> Vaccancy </a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Profiles</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item"> <a class="nav-link" href="../../fresher.php"> Freshers </a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-page" aria-expanded="false" aria-controls="general-page">
                <span class="menu-title">View</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
              <div class="collapse" id="general-page">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="Audition-record.php"> Audition </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../vaccancy/vaccancy-record.php"> Vaccancy </a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-page1" aria-expanded="false" aria-controls="general-page1">
                <span class="menu-title">Application</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
              <div class="collapse" id="general-page1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#"> Audition </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../applied/applied_vacancy.php"> Vaccancy </a></li>
                  
                </ul>
              </div>
            </li>
            
          
          
          </ul>
        </nav>
    <!-- [ Header ] end -->
    
 <br><br><br><br><br><br><br>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">



    
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
              <div class="container-fluid">
          <div class="row">
            <div class="col-md-25">
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
                        <label for="skills"
                        class="col-sm-5 text-end control-label col-form-label">category *</label>
                        <div class="col-sm-7">
                            <select name="feild" id="feild" class="form-control" onChange="getSubcat(this.value);"  required>
        <option value="">Select Category</option> 

          <?php 
          $query1=mysqli_query($query,"SELECT * from `tbl_aud`");
        while($row=mysqli_fetch_assoc($query1))
            {
              ?>

<option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option><?php } ?>
</select>

</div>
                          
                        </div>

                    <div class="form-group row">
                        <label for="skills"
                        class="col-sm-5 text-end control-label col-form-label">Skills *</label>
                        <div class="col-sm-7">
                            <select name="skills" id="skills" class="form-control" onChange="getSubcat(this.value);"  required>
        <option value="">Select Skills</option> 
          <?php 
          $query1=mysqli_query($query,"SELECT * from `tbl_skills`");
        while($row=mysqli_fetch_assoc($query1))
            {?>

<option value="<?php echo $row['skills'];?>"><?php echo $row['skills'];?></option><?php } ?>
</select>

</div>
                          
                        </div>
                   
                    <div class="form-group row">
                        <label for="qualification"
                        class="col-sm-5 text-end control-label col-form-label">Qualification *</label>
                        <div class="col-sm-7">
                            <select name="qualification" id="qualification" class="form-control" onChange="getSubcat(this.value);"  required>
        <option value="">Select Qualification</option> 
          <?php $query1=mysqli_query($query,"SELECT * from `tbl_qualification`");
      while($row=mysqli_fetch_assoc($query1))
            {?>

<option value="<?php echo $row['qualification'];?>"><?php echo $row['qualification'];?></option><?php } ?>
</select>

</div>
                          
                        </div>
                    <div class="form-group row">
                      <label
                        for="venue"
                        class="col-sm-5 text-end control-label col-form-label"
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
                        class="col-sm-5 text-end control-label col-form-label"
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
<?php
}
else
{
  header("location:../../login.php");
}
?>