<?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');
}

$res=mysqli_query($query,"SELECT * FROM tbl_registration WHERE reg_id=".$_SESSION['id']);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);





$res2=mysqli_query($query,"SELECT * FROM tbl_login WHERE l_id=".$_SESSION['id']);
$row2=mysqli_fetch_array($res2,MYSQLI_ASSOC);


$res3=mysqli_query($query,"SELECT * FROM tbl_login WHERE l_id=".$row2['l_id']);
$row3=mysqli_fetch_array($res3,MYSQLI_ASSOC);







?>
<!DOCTYPE html>
<html>
    <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='#' rel='stylesheet'>
                                <link rel="stylesheet" href="./css/style1.css">
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
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
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
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
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $row['Fname']  ?><?php
        }
        } ?>
    
</span><span class="text-black-50">gdf;lhgfc</span><span> </span></div>

        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>


            <!----------------------------FORM DESIGN---------------->

                <form>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels"><b>Name**</b></label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels"><b>Surname**</b></label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels"><b>Mobile Number**</b></label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels"><b>Alternative Mobile**</b></label><input type="text" class="form-control" placeholder="enter Alternative phone number" value=""></div>
                        
<div class="col-md-12"><label class="labels"><b>Gender**</b></label><select class="form-control">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Female</option>
                              </select></div>  
                    <div class="col-md-12"><label class="labels"><b>Date Of Birth**</b></label><input type="date" class="form-control" placeholder="Your DOB" value=""></div>
                    <div class="col-md-12"><label class="labels"><b>Address Line 1**</b></label><input type="text" class="form-control" placeholder="enter address line 1" value="" required></div>
                    <div class="col-md-12"><label class="labels"><b>Address Line 2</b></label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels"><b>City**</b></label><input type="text" class="form-control" placeholder="City" value=""></div>
                    <div class="row mt-3">
                    <div class="col-md-6"><label class="labels"><b>State/Region**</b></label><input type="text" class="form-control" placeholder="State" value="" required></div>
                    <div class="col-md-6"><label class="labels"><b>Country**</b></label><input type="text" class="form-control" value="" placeholder="Country" required></div>
                </div>
                    <div class="col-md-12"><label class="labels"><b>Postcode**</b></label><input type="text" class="form-control" placeholder="enter Post code" value="" required></div>
                    
                    
                    <div class="col-md-12"><label class="labels"><b>Email ID**</b></label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <br><br><br>
                    <h6 class="text-left"></b><i>Change Password**</i><b></h6>
                    <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="enter your new Password here" value=""></div>
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input type="text" class="form-control" placeholder="Confirm Password" value=""></div>
                    
                </div>
                <div class="form-group">
                        <label>Set Profile</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </form>

            </div>
        </div>
        
    </div>
</div>
</div>
</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>

                               
     
          </body>
</html>