<?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');
?>


  <?php
    if(isset($_POST['submit'])) {

    //get the name and comment entered by user
    $category=$_POST['category'];

    //connect to the database
   
    $check=mysqli_query($query,"SELECT * from `tbl_filmtype` where types='$category'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      //echo '<script>alert("Release Category Already exists")</script>';
   } else {  
    //insert results from the form input
      $query1 = "INSERT INTO `tbl_filmtype`(`types`) VALUES ('$category')";
     

      $result = mysqli_query($query, $query1) or die('Error querying database.');

      mysqli_close($query);
    }
    echo "Film Category Added";
    }
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
              <a class="nav-link" href="film.php">
                <span class="menu-title">Back</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title" >Add new Film Type</span>
               
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              
            </li>
           
          </ul>
        </nav>
        <!-- partial -->
        	<div class="wrapper">
		<div class="container">
			<div class="row">
			
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Film Type</h3>
							</div>
							<div class="module-body">

								
									<br />

			<form class="form-horizontal row-fluid" name="Category" method="post" >
									
<div class="form-group mb-3">
              <label>Film Type</label>
              <input type="text" class="form-control" name="category" id = "category" title="Start with a Capital letter & Only alphabets without space are allowed!!" placeholder="film category **" value = "" required onchange="Val();"><span id = "charMsg" style="color:red"> </span>
              <script>    
function Val() 
{
    var val = document.getElementById('category').value;

    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
    {
        document.getElementById('charMsg').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                document.getElementById('category').value = "";
        return false;
    }
document.getElementById('charMsg').innerHTML=" ";
    return true;
}
</script>



            </div>

 <br><br><br>


	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn btn-success">Create</button>
											</div>
										</div>
									</form>
							</div>
						</div>
            <br><br><br>



	<div class="module">
							<div class="module-head">
								<h3>Manage Categories</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Category</th>
											
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php 

include('connectivity.php');
   //get the name and comment entered by user
    $query123=mysqli_query($query,'SELECT * FROM `tbl_filmtype`');
$cnt=1;
while($row1=mysqli_fetch_array($query123))
{
?>                  
  									<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row1['types']);?></td>
											
											<td><a href="filmdelete.php?filmtype_id=<?php echo $row1['filmtype_id'];?>"><button type="button" class="btn  btn-danger">Delete</button></a></td>



    <td><a href="update.php?filmtype_id=<?php echo $row1['filmtype_id'];?>"><button type="button" class="btn  btn-info">Edit</button></a></td>
										</tr>
										<?php $cnt=$cnt+1; }
                     ?>
										
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
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