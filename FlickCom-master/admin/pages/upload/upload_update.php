


 <?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');
$id=$_REQUEST['film_id'];
$query1 = "SELECT * from tbl_films where film_id='".$id."'"; 
$result = mysqli_query($query, $query1) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
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
        <!--div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div-->
           <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          
         
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Admin</p>
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
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addmember.php">
                <span class="menu-title" >Add Staff</span>
                 <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Profiles</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../staffs/member_record.php"> Staffs </a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="../audition/audition-view.php"> Audition </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../view/vaccancy-view.php"> Vaccancy </a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../upload/film.php">
                <span class="menu-title">Upload</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
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
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">
                       <center><h3>Update Uploaded Data</h3></center> 
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                             <table class="table">
                                <?php
$status = "";
if(isset($_POST['submit']))
{
 
$fname =$_POST['name'];
$img =$_POST['img'];
$rdate =$_POST['date'];
$filmtype =$_POST['type'];
$rpl =$_POST['category'];

$update="UPDATE `tbl_films` SET `film_name`='$fname',`pic`='$img',`release_date`='$rdate',`film_type`='$filmtype',`release_id`='$rpl' WHERE `film_id`=$id";
mysqli_query($query, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='film_record.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
//header("location:film_record.php");
}else { echo "Successfully Updated";
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['film_id'];?>" />


<div class="card-body">
                      <div class="form-group">
<label for="name">Film Name *</label>
                        <input type="text"
                          class="form-control"
                          id="name" name="name"
                          placeholder="Film Name " title="Start with a Capital letter & Only alphabets without space are allowed!!" value="<?php echo $row['film_name'];?>" required onchange="Validate();"
                        /><span id="msg2" style="color:red;"></span>
                      
                      <script>    
function Validate() 
{
    var val = document.getElementById('name').value;

    if (!val.match(/^[A-Z][A-Za-z]/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter !!";
                document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script></div></div>
 <div class="card-body">
                      <div class="form-group">
<label for="deadline">Release Date *</label>
                        <input type="date"
                          class="form-control"
                          id="date" name="date"
                          placeholder="Date of last submition" min='2022-01-01' max='2023-01-01' required value="<?php echo $row['release_date'];?>"
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
</div></div>
<div class="card-body">
                      <div class="form-group">
<label for="exampleSelectGender">Film Type *</label>
                        <select class="form-control" name="type" id="type" required>
                          <option value="">Select Category</option> 
          <?php $query1=mysqli_query($query,"SELECT * from `tbl_filmtype`");
      while($row=mysqli_fetch_assoc($query1))
            {?>

<option value="<?php echo $row['types'];?>"><?php echo $row['types'];?></option><?php } ?>
                        </select>
                      </div></div>


<div class="card-body">
                      <div class="form-group">
<label for="placeholder">Platform *</label>
                            <select name="category" id="category" class="form-control" onChange="getSubcat(this.value);"  required>
        <option value="">Select Category</option> 
          <?php $query1=mysqli_query($query,"SELECT * from `release`");
      while($row=mysqli_fetch_assoc($query1))
            {?>

<option value="<?php echo $row['release_id'];?>"><?php echo $row['category'];?></option><?php } ?>
</select>
</div></div>

<div class="card-body">
                      <div class="form-group">
 <label>File upload *</label>
                        <input type="file" name="img" accept=".jpg,.png,.bmp,.jfif,.webp" class="file-upload-default" required="Must choose one" onchange="validate_fileupload(this.value);">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" required>
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload
                            </button>
                          <script>
var valid = false;

function validate_fileupload(input_element)
{
    var el = document.getElementById("feedback");
    var img = input_element.value;
    var allowed_extensions = new Array("jpg","png","gif","jfif","webp");
    var file_extension = img.split('.').pop(); 
    for(var i = 0; i < allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
            valid = true; // valid file extension
            el.innerHTML = "";
            return;
        }
    }
    el.innerHTML="Invalid file";
    valid = false;
}

function valid_form()
{
    return valid;
}
</script>
                          </span>
                        </div>
                      </div></div>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
                </div>
            </div>
        </div>
    </div></div>
                </div>
              </div>
             
              
      
           
</section>
</table></div></div></div></div></div></div> </div>
          </div></div>
                  
        <!-- main-panel ends -->
     
      <!-- page-body-wrapper ends -->
  
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
       
          <!-- partial -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
     <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © FlickCom 2022</span>
              
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
  header("location:../../../login.php");
}
?>