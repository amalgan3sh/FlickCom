<?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlickCom:Member-AuditionView</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<span>Staff</span>
							
						</div>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					
					<li class="nav-item">
					    <a href="Members-index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
					</li>
					
				

				</ul>
				
				
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/logo.png" alt="" class="logo">
						<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
				</div>	
					</ul>
				</div>	
	</header>


<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                       <center><h3>Audition Details</h3></center> 
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                              <tr>
                                                
                                                <th><center> CATEGORY</center></th>
                                                <th>SKILLS</th>
                                                <th>QUALIFICATION</th>
                                                <th>VENUE</th>
                                                <th>DATE</th>
                                                <th></th>
                                                <th></th>
                                                
                                              </tr>
                                           </thead>
                                          <tbody>
                                            <?php
                                                
  $query1=mysqli_query($query,"SELECT * FROM `tbl_audition`");


  
       while($query2=mysqli_fetch_array($query1))
{
   ?>
   <tr class="table-success"> 
    <td><?php echo $query2['category'];?></td>
    <td><?php echo $query2['skills'];?></td>
    <td><?php echo $query2['qualification'];?></td>
    <td><?php echo $query2['venue'];?></td> 
    <td><?php echo $query2['date'];?></td>
    <td><a href="deleteaudition.php?audition_id=<?php echo $query2['audition_id'];?>"><button type="button" class="btn  btn-danger">Delete</button></a></td>



    <td><a href="updateaudition.php?audition_id=<?php echo $query2['audition_id'];?>"><button type="button" class="btn  btn-info">Edit</button></a></td>
    </tr>
   
    <?php
}
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
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>



</body>
</html>
<?php
}
else
{
  header("location:../../../login.php");
}
?> 
