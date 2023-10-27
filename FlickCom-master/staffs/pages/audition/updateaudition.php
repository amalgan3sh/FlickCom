  <?php
session_start();
include('connectivity.php');
$id=$_REQUEST['audition_id'];
$query1 = "SELECT * from tbl_audition where audition_id='".$id."'"; 
$result = mysqli_query($query, $query1) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
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
                  <li class="nav-item"> <a class="nav-link" href="#"> Vaccancy </a></li>
                  
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
                  
                  <li class="nav-item"> <a class="nav-link" href="#"> Freshers </a></li>
                  
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
                  <li class="nav-item"> <a class="nav-link" href="#"> Vaccancy </a></li>
                  
                </ul>
              </div>
            </li>
            
          
          
          </ul>
        </nav>
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">
                       <center><h3>Audition Details</h3></center> 
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                             <table class="table">
                                <?php
$status = "";
if(isset($_POST['submit']))
{
 
$feild =$_POST['feild'];
$skills =$_POST['skills'];
$qual =$_POST['qualification'];
$venue =$_POST['venue'];
$date =$_POST['date'];

$update="UPDATE `tbl_audition` SET `category`='$feild',`skills`='$skills',`qualification`='$qual',`venue`='$venue',`date`='$date' WHERE `audition_id`=$id";
mysqli_query($query, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='Audition-record.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
header("location:Audition-record.php");
}else {   echo "Successfully Updated";
?>
<div>
<form name="form" method="post" action="Audition-record.php"> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['audition_id'];?>" />
<p><input type="text" name="feild" placeholder="Select Feild" 
required list="defaultEmails" size="64" maxlength="256" multiple value="<?php echo $row['category'];?>" />
<datalist id="defaultEmails">
                            <option value="Editing">
                            <option value="Cinematographer">
                            <option value="Casting">
                            <option value="Camera Operator">
                            <option value="Film Crew">
                            <option value="Production Assistant">
                            <option value="Sound Engineer">
                        </datalist></p>

<p><input type="text" id="skills" name="skills" placeholder="select number of vaccancy"  
required  value="<?php echo $row['category'];?>" />


</p>

<p><input type="text" name="qualification" placeholder="Choose qualification" 
required list="defaultEmails" size="64" maxlength="256" multiple value="<?php echo $row['qualification'];?>" />
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
</p>

<p><input type="text" id="venue" name="venue" placeholder="Enter location" 
required required value="<?php echo $row['venue'];?>" />

</p>

<p><input type="date" name="date" id="date" placeholder="date" 
required min='2022-01-01' max='2023-01-01' value="<?php echo $row['date'];?>" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
</p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
                </div>
            </div>
        </div>
    </div></div>
</div></div></div></option></option></option></option></option></option></option></option></datalist></p></option></option></option></option></option></option></option></datalist></p></form></div></table></div></div></div></div></div></div></section></div></div>
</section>

 <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © FlickCom  2022</span>
              
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