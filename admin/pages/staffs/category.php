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
              <a class="nav-link" href="../staffs/addmember.php">
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
                  <li class="nav-item"> <a class="nav-link" href="member_record.php"> Staffs </a></li>
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
              <div class="col-lg-15 grid-margin stretch-card">
                <div class="card">
                  <section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <div class="col-md-15">
                <div class="card">
                  <div>
           <form class="d-flex align-items-center h-100" action="category.php" method="_GET">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search By Designation" id="submit" name="submit" type="submit">
              </div>
            </form>
        </div>
                    <div class="card-header">
                       <center><h3>Staffs Record</h3></center> 
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                              <tr>
                                                
                                                <th><center> FIRST NAME</center></th>
                                                <th>LAST NAME</th>
                                                <th>EMAIL</th>
                                                <th>DESIGNATION</th>
                                                <th>PASSWORD</th>
                                                <th></th>
                                                <th></th>
                                              </tr>
                                           </thead>
                                          <tbody>
                                            <?php
                                                
  $name = $_GET['submit'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($query, "SELECT * FROM tbl_addmembers
    WHERE designation LIKE '%{$name}%'");

while ($row = mysqli_fetch_array($result))
{
  ?>
   <tr class="table-success"> 
    <td><?php echo $row['FName'];?></td>
    <td><?php echo $row['LName'];?></td>
    <td><?php echo $row['Email'];?></td>
    <td><?php echo $row['Designation'];?></td> 
    <td><?php echo $row['password'];?></td>

    


   

    </tr>     
    <?php
}
?>
<?php
    mysqli_close($query);



   ?>
   
   

                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Contextual-table ] end -->
            <!-- [ Background-Utilities ] start -->
            
            <!-- [ Background-Utilities ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
                </div>
              </div>
             
         
            </div>
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