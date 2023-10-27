


 <?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');
$id=$_REQUEST['filmtype_id'];
$query1 = "SELECT * from tbl_filmtype where filmtype_id='".$id."'"; 
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
        
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
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
              <a class="nav-link" href="./add-filmtype.php">
                <span class="menu-title">Back</span>
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
                 <section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       <center><h3>Film Types</h3></center> 
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                             <table class="table">
                                <?php
$status = "";
if(isset($_POST['submit']))
{
 
$types =$_POST['types'];

$update="UPDATE `tbl_filmtype` SET `types`='$types' WHERE `filmtype_id`=$id";
mysqli_query($query, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='add-filmtype.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
header("location:./add-filmtype.php");
}else { echo "Successfully Updated";
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['filmtype_id'];?>" />

<p><label><b>Film Type:</b></label><input type="text" name="types" placeholder="Enter Name" 
required value="<?php echo $row['types'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>
                  </div>
                </div>
              </div>
             
              
      
            </div>
          </div></div>
        <!-- main-panel ends -->
     
      <!-- page-body-wrapper ends -->
  
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
       
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
  header("location:../../../login.php");
}
?>