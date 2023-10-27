<?php
include('connectivity.php');                                                
  $query1=mysqli_query($query,"SELECT * FROM `tbl_apply` INNER JOIN `tbl_registration` ON tbl_apply.reg_id = tbl_registration.reg_id");
  
$row=mysqli_fetch_array($query1);
$regid=$row['reg_id'];
$query2=mysqli_query($query,"SELECT * FROM `tbl_freshers` WHERE `reg_id`='$regid'");
$row4=mysqli_fetch_array($query2);



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
    <link rel="stylesheet" href="../../assets/css/style1.css">
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
                  <li class="nav-item"> <a class="nav-link" href="../vaccancy/vaccancy-record.php"> Vaccancy </a>
                  </li>
                  
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






<div class="col-md-4 border-right">
            <div class="p-4 py-6">
                
                   
                
             <center> <div class="profile-input-field">
               
            <form method="post" action="#" >
                 <h4 class="text-right"><i><u>Profile</u></i> </h4>
                 <div class="col-md-7">
                <div class="form-group">
                    <label><b>First Name</b></label>
                        <input type="text" class="form-control" id="fname" name="fname" style="width:20em;" readonly="" value="<?php echo $row['Fname']; ?>" required />
                        </div>
                    </div>

                <div class="form-group">
                    <label><b>Surname</b></label>
                        <input type="text" class="form-control" id="lname" name="lname" style="width:20em;" readonly="" value="<?php echo $row['Lname']; ?>" required />
                        </div>

                <div class="form-group">
                    <label><b>Gender</b></label>
                        <input type="text" class="form-control" id="gender" name="gender" style="width:20em;" readonly="" required value="<?php echo $row['gender']; ?>"/>
                </div>

                <div class="form-group">
                    <label><b>Mobile</b></label>
                        <input type="text" class="form-control" id="mobile" name="mobile" style="width:20em;" readonly="" value="<?php echo $row['Mobile']; ?>" required />
                        
                </div>
                               <div class="d-flex justify-content-between align-items-center experience"><center><span> <i><u><b>Add Additional Details</b></u></i></span></center></div>
<br>

                <div class="col-md-7"><label class="labels"><b>Date Of Birth </b></label><input type="date" name="dob" class="form-control" readonly="" value="<?php echo $row4['dob'];?>" >
                    
                </div> <br>

                <div class="col-md-7"><label class="labels"><b>Alternative Number </b></label><input type="text"id="altphn" name="atlnmbr" class="form-control" value="<?php echo $row4['alt_mobile'];?>" required readonly=""/>
                        
                </div>

                <div class="col-md-7"><label class="labels"><b>Address Line 1 </b></label><input type="text" id="adrs1" name="adrs1" class="form-control" readonly="" value="<?php echo $row4['address'];?>" />
            </div> <br>

                                <div class="form-group">
                    <a href="applied_vacancy.php"><button type="button" class="btn  btn-danger">Back</button></a>
                </div>




                
        </div>
    </div>
</div>

<div class="col-md-3">
            <div class="p-3 py-3"><br><br>
                
                <div class="col-md-8"><label class="labels"><b>Address Line 2</b></label><input type="text" id="adrs2" name="adrs2" class="form-control" readonly="" value="<?php echo $row4['address2'];?>" />

            </div>

                <div class="col-md-8"><label class="labels"><b>City</b></label><input type="text" id="city" name="city" class="form-control" readonly="" value="<?php echo $row4['city'];?>" />
                   
            </div> <br>

                <div class="col-md-8"><label class="labels"><b>State</b></label><input type="text" id="state" name="state" class="form-control" readonly="" value="<?php echo $row4['state'];?>"/>
                    
            </div> 

            <div class="col-md-8"><label class="labels"><b>Nationality</b></label><input type="text" id="country" name="country" class="form-control" readonly="" value="<?php echo $row4['country'];?>"/> </div><br>

                <div class="col-md-8"><label class="labels"><b>Postcode</b></label><input type="text" id="pin" name="pin" class="form-control" readonly="" value="<?php echo $row4['pin'];?>" required "/>
                </div>
                <div class="col-md-8"><label class="labels"><b>Profile</b></label><input type="text" name="pic" class="form-control" readonly="" value="../../../fileupload/Profile_pic/<?php echo $row4['pic'];?>"><a href="../../../fileupload/Profile_pic/<?php echo $row4['pic'];?>"target="_blank">View</a><!--a href="../fileupload/Profile_pic/<?php echo $row4['pic'];?>" download>Download</a--></div> <br>

                <div class="col-md-8"><label class="labels"><b>Resume</b></label><input type="text" name="resume" class="form-control" readonly="" value="../../../fileupload/Resume/<?php echo $row4['resume'];?>"><a href="../../../fileupload/Resume/<?php echo $row4['resume'];?>"target="_blank">View</a><!--a href="../fileupload/Resume/<?php echo $row4['pic'];?>" download>Download</a--></div>

                <div class="col-md-8"><label class="labels"><b>Intro</b></label><input type="text" name="intro" class="form-control" readonly="" value="../../../fileupload/Video/<?php echo $row4['intro'];?>"><a href="../../../fileupload/Video/<?php echo $row4['intro'];?>"target="_blank">View</a><!--a href="../fileupload/Video/<?php echo $row4['pic'];?>" download>Download</a--></div>
            </div>

        </div>
    </form>
    </center>
</div>
</div>

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