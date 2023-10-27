<?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');

$vid=$_GET['vaccancy_id'];
$uid = $_SESSION['id'];

if(isset($_POST['submit'])){

$qual = $_POST['qual'];

  $fileName=$_FILES["resume"]["name"];
  $targetDir="../fileupload/Resume/";
  //$targetDir="./corona-free-dark-bootstrap-admin-template-1.0.0/template/upload";
  $targetFilePath = $targetDir . $fileName; 
  move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath);


$filename=$_FILES["certificate"]["name"];
  $targetDir="../fileupload/certificate/";
  //$targetDir="./corona-free-dark-bootstrap-admin-template-1.0.0/template/upload";
  $targetFilePath = $targetDir . $filename; 
  move_uploaded_file($_FILES["certificate"]["tmp_name"], $targetFilePath);


$check=mysqli_query($query,"SELECT * from `tbl_apply` where reg_id='$uid' AND vaccancy_id='$vid'");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0) {

            $query2="UPDATE `tbl_apply` SET reg_id='$uid', vaccancy_id='$vid', status='pending', qualification='$qual',certificate='$fileName', resume='$filename' WHERE reg_id = '$uid' AND vaccancy_id='$vid'";
            $result = mysqli_query($query, $query2);
            header("location:apply.php?vaccancy_id=$vid");
        }  

        else 
        { 

            $sql = "INSERT IGNORE INTO `tbl_apply`(`reg_id`, `vaccancy_id`, `status`, `qualification`, `certificate`, `resume`) VALUES ('$uid','$vid','pending','$qual','$fileName','$filename')";
            $result = mysqli_query($query,$sql);
            header("location:apply.php?vaccancy_id=$vid");

            
        }

?>
  <script type="text/javascript">
            alert(" Successfully Registered.");
            window.location = "apply.php";
  </script>
<?php
}

?>

<!DOCTYPE html>
    <html>
        <head>
                                <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>FlickCom : Apply Vacancy</title>
        <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='#' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
                                    
                                
                                    
                                </script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body {
    background: #20c997;
}

.form-control:focus {
    box-shadow: none;
    border-color:  #20c997;
}

.profile-button {
    background:  #20c997;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background:  #20c997;
}

.profile-button:focus {
    background:  #20c997;
    box-shadow: none
}

.profile-button:active {
    background:  #20c997;
    box-shadow: none
}

.back:hover {
    color:  #20c997;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}



</style>
</head>

 <body className='snippet-body'>
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">Flick</span>Com</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                
                <!--a href="#qualification" class="nav-item nav-link">Vaccancy</a-->
                
                
            </div>
            <a href="../login.php" class="btn btn-outline-primary d-none d-lg-block">SignOut</a>
            <!--a href="" class="btn btn-outline-primary d-none d-lg-block">Hire Me</a-->
        </div>
    </nav>
    <br><br><br><br>
</div>
</div>


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"></h4>
                </div>


            <!----------------------------FORM DESIGN---------------->


            <?php
$vid=$_GET['vaccancy_id'];
$sql2= mysqli_query($query,"SELECT * FROM `tbl_vaccancy` WHERE `vaccancy_id`='$vid'");
$rows=mysqli_fetch_assoc($sql2);

?>


        <div class="profile-input-field">
            <form method="post" action="#" enctype="multipart/form-data">
             <div class="d-flex justify-content-between align-items-center experience"><span></span></div><br>
             <center><h3><?php echo $rows['Vaccancy_feild'];?>
             <?php
         }
             ?>

              </h3></center>


             <div class="form-group">
                    <label><b>Highest Education Qualification</b></label>
                        <input type="text" class="form-control" id="qual" name="qual" style="width:20em;" placeholder="Enter your highest qualification" value="" required onchange="ValFname();"/>
                        
                </div>
            
            <div class="card-body">
                      <div class="form-group">
                        <label>Upload Your Resume *</label>
                        <div class="input-group col-xs-15">
                          <input class="file-upload-browse btn btn-gradient-primary" accept=".pdf,.docx" type="file" id="resume" name="resume" required="Must choose one" onchange="return resumeValidation()" />
 
    <!-- Image preview -->
    <div id="resumePreview"></div>
    <script>
        function resumeValidation() {
            var fileInput =
                document.getElementById('resume');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.pdf|\.docx)$/i;
             
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
                        </div>
             
                        </div>
                    </div>
                </div> <br>

                    <div class="card-body">
                    <div class="form-group">
                        <label>Upload Certificates *</label>
                        <div class="input-group col-xs-15">
                          <input class="file-upload-browse btn btn-gradient-primary" accept=".pdf,.docx" type="file" id="certificate" name="certificate" required="Must choose one" onchange="return fileValidation();" />
                           <div id="certificatePreview"></div>
    <script>
        function fileValidation() {
            var fileInput =
                document.getElementById('certificate');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.pdf|\.docx)$/i;
             
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
  
                        </div>
                    </div>
                </div> <br>

                <br><br><br><br>

                <div class="form-group">
                    <center>
                    <input type="submit" name="submit" value="Apply" class="btn btn-primary" style="width:30em; background-color:#20c997;"><br><br>
                    </center>
                </div>
            

</form>
        </div>
    </div>
</div>
<div class="col-md-4">
            <div class="p-3 py-5">
                
                

            </div>
</div>
        
</div>
</div>
 <div class="container text-center py-5">
         <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">FlickCom</a>. 
            </p>
        </div>
    
    <!-- Footer End -->

   
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>