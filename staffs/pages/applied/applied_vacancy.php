<?php
include('connectivity.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FlickCom Vaccancy</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
<!-- Button Style -->
    <style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>



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
                  <li class="nav-item"> <a class="nav-link" href="../audition/Audition.php"> Audition </a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="../audition/Audition-record.php"> Audition </a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="applied_vacancy.php"> Vaccancy </a></li>
                  
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
                       <center><h3>Application For Vaccancy </h3></center> 
                       <div align="right">
                    <a href="approved_vacancy.php"> <button  type="button" class="btn  btn-success">Approved Applications</button><a href="approved_vacancy.php"> <button  type="button" class="btn  btn-danger">Rejected Applications</button></a>
                    </div>

                    </div>
                    
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                          <form method="post" action="">
                            <table class="table">
                                <thead>
                                              <tr>
                                                
                                                <th><center> Application Number</center></th>
                                                <th>Candidate Name</th>
                                                <th>Vacancy Id</th>
                                                <th>Qualification</th>
                                                <th>Cirtificate</th>
                                                <th>Resume</th>
                                                 <th>Date of Applied</th>
                                                <th></th>
                                                <th></th>
                                                
                                              </tr>
                                           </thead>
                                          <tbody>
                                            <?php
                                                
  $query1=mysqli_query($query,"SELECT * FROM `tbl_apply` INNER JOIN `tbl_registration` ON tbl_apply.reg_id = tbl_registration.reg_id Where tbl_apply.status = 'pending'");


  
       while($query2=mysqli_fetch_array($query1))
{
   ?>
   <tr class="table-success"> 
    <td><?php echo $query2['apply_id'];?></td>
    <td><?php echo $query2['Fname'];?></td>
    <td><?php echo $query2['vaccancy_id'];?></td>
    <td><?php echo $query2['qualification'];?></td>
    <td><?php echo $query2['certificate'];?></td> 
    <td><?php echo $query2['resume'];?></td>
    <td><?php echo $query2['apply_date'];?></td>
    <td><a href="candidate_vacancy.php?id=<?php echo $query2['apply_id'];?>"><button type="button" class="btn  btn-info">Candidate Details</button></a></td>

     <td><a href="approv_vaccancy.php?approve_id=<?php echo $query2['apply_id'];?>"><button name="approved" type="button" class="button button1">Approve</button></a></td>

     <td><a href="reject_vacancy.php?reject_id=<?php echo $query2['apply_id'];?>"><button name="reject" type="button" class="btn  btn-danger">Reject</button></a></td>
   
   


 
    </tr>
   
    <?php
}
?>
 


                                
                            </table>
                            </form>
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
</tbody></table></div></div></div>
    <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © FlickCom</span>
              
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