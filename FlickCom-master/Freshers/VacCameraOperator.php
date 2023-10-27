<?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');

}
?>
<!DOCTYPE html>
    <html>
        <head>
                                                   <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>FlickCom : Profile</title>
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
}</style>
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
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        
       
            <div class="p-3 py-5">
                
                    <center><h4><b><i>Vacancies For Camera Operator</i></b></center></h4>
                


            <!----------------------------FORM DESIGN---------------->

        <div class="profile-input-field">
            <form method="post" action="#" >
                <table class="table">
                                <thead>
                                              <tr>
                                                
                                                <th><center> VACCANCY FEILD</center></th>
                                                <th>TOTAL VACCANCY</th>
                                                <th>QUALIFICATION</th>
                                                <th>EXPERIENCE</th>
                                                <th>DEAD LINE</th>
                                                <th>LAST UPDATE</th>
                                                <th></th>
                                                
                                              </tr>
                                           </thead>
                                          <tbody>
                                            <?php
                                                
  $query1=mysqli_query($query,"SELECT * FROM `tbl_vaccancy` WHERE Vaccancy_feild='Camera Operator'");


  
       while($query2=mysqli_fetch_array($query1))
{
   ?>
   <tr class="table-success"> 
    <td><?php echo $query2['Vaccancy_feild'];?></td>
    <td><?php echo $query2['Total_vaccancy'];?></td>
    <td><?php echo $query2['qualification'];?></td>
    <td><?php echo $query2['experience'];?></td> 
    <td><?php echo $query2['deadline'];?></td>
    <td><?php echo $query2['lastupdates'];?></td>
    <td><a href="apply.php?vaccancy_id=<?php echo $query2['vaccancy_id'];?>"><button type="button" class="btn  btn-info">Apply</button></a></td>
     
    </tr>
    </tr>
   
    <?php
}
?>
 


                                
                          
                        </tbody>  </table>
                    </form>
                </div></div></div></div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

             
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