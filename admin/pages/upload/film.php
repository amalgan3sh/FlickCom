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
              <a class="nav-link" href="add-releasetype.php">
                <span class="menu-title" >Add new Release Platform</span>
                
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-filmtype.php">
                <span class="menu-title" >Add new Film Type</span>
               
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="film_record.php">
                <span class="menu-title">View Uploaded Data</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Upload New Film Posters </h3>
              
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form form class="form-horizontal" method="post" action="filmadd.php" name="myform" class="registartion-form" enctype="multipart/form-data" onsubmit="return validateform()">
                      <div class="card-body">
                        <label for="name">Film Name *</label>
                        <input type="text"
                          class="form-control"
                          id="name" name="name"
                          placeholder="Film Name " title="Must Enter Something" required="" />
                      </div>
                      
                        <div class="card-body">
                        <label for="deadline">Release Date *</label>
                        <input type="date"
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
                      <!--div class="form-group">
                        <label for="exampleInputPassword4">Film Type</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div-->
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


                          </div>
                        </div>
                     
                      <div class="card-body">
                      <div class="form-group">
                        <label>File upload *</label>
                        <input type="file" id="img" name="img" accept=".jpg,.png,.bmp,.jfif,.webp" class="file-upload-default" required="Must choose one" onchange="return fileValidation()">
                        <div class="input-group col-xs-12">
                          <input type="text" id="img" name="img" class="form-control file-upload-info" disabled placeholder="Upload Image" required>
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload
                            </button>
                          <div id="imagePreview"></div>
    <script>
        function fileValidation() {
            var fileInput =
                document.getElementById('img');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif|\.jfif|\.webp)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            }
            else
            {
             
               return true;
                
            }
        }
    </script>
                          </span>
                        </div>
                      </div>
                    </div>
                     <button type="submit" name="submit" value="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             

            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!--footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer-->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
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