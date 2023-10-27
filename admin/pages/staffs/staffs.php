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
      
        <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
<link rel="stylesheet" href="css/plugins.css"/>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
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


          



<div class="movie-items">
  <div class="container">
    <div class="row ipad-width">
      <div class="col-md-8">
        <div class="title-hd">
          
        </div>
        <div class="tabs">
          
            <p><li class="active"><a href="#tab1">#Popular</a></li>
            <p><li><a href="#tab2"> #Coming soon</a></li></p>
            <li><a href="#tab3">  #Top rated  </a></li>
            <li><a href="#tab4"> #Most reviewed</a></li>                        
        
            <div class="tab-content">
                <div id="tab1" class="tab active">
                    <div class="row">
                      <div class="slick-multiItem">
                        







                        
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/beast.jfif" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Beast</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/RRR.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">RRR</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/hey!.webp" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Hey! Sinamika</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div id="tab2" class="tab">
                   <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div id="tab3" class="tab">
                  <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div id="tab4" class="tab">
                  <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-hd">
          <h2>on tv</h2>
          <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
        </div>
        <div class="tabs">
          <ul class="tab-links-2">
            <li><a href="#tab21">#Popular</a></li>
            <li class="active"><a href="#tab22"> #Coming soon</a></li>
            <li><a href="#tab23">  #Top rated  </a></li>
            <li><a href="#tab24"> #Most reviewed</a></li>                        
          </ul>
            <div class="tab-content">
                <div id="tab21" class="tab">
                    <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div id="tab22" class="tab active">
                   <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                      </div>
                    </div>
                </div>
                <div id="tab23" class="tab">
                  <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                 <div id="tab24" class="tab">
                  <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        
    </div>
  </div>
</div>










          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © FlickCom</span>
              
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
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>

<?php
}
else
{
  header("location:../login.php");
}
?>