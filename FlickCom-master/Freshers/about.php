<?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');


$res=mysqli_query($query,"SELECT * FROM tbl_registration WHERE reg_id=".$_SESSION['id']);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

$res2=mysqli_query($query,"SELECT * FROM tbl_registration WHERE reg_id=".$_SESSION['id']);
$row2=mysqli_fetch_array($res2,MYSQLI_ASSOC);

$res3=mysqli_query($query,"SELECT * FROM tbl_registration WHERE reg_id=".$row2['reg_id']);
$row3=mysqli_fetch_array($res3,MYSQLI_ASSOC);

if(isset($_POST['submit'])){

  $img=$_FILES["img"]["name"];
  $targetDir="../fileupload/Profile_pic/";
  $targetimgPath = $targetDir . $img; 
  move_uploaded_file($_FILES["img"]["tmp_name"], $targetimgPath);


  $resumename=$_FILES["resume"]["name"];
  $targetDir="../fileupload/Resume/";
  $targetresumePath = $targetDir . $resumename; 
  move_uploaded_file($_FILES["resume"]["tmp_name"], $targetresumePath);

  $introname=$_FILES["intro"]["name"];
  $targetDir="../fileupload/Video/";
  $targetintroPath = $targetDir . $introname; 
  move_uploaded_file($_FILES["intro"]["tmp_name"], $targetintroPath);

        $useid=$_SESSION['id'];
        $b = $_POST['dob'];
        $c = $_POST['atlnmbr'];
        $d = $_POST['adrs1'];
        $e = $_POST['adrs2'];
        $f = $_POST['city'];
        $g = $_POST['state'];
        $h = $_POST['country'];
        $i = $_POST['pin'];
        $field = $_POST['field'];
        
        #$l = $_POST['img'];
        #$m = $_POST['resume'];
        #$n = $_POST['intro'];

        $check=mysqli_query($query,"SELECT * from `tbl_freshers` where reg_id='$useid'");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0) {
            $query2="UPDATE `tbl_freshers` SET reg_id='$useid', dob='$b', alt_mobile='$c', Vaccancy_feild='$field',address='$d', address2='$e', city='$f', state='$g',country='$h', pin='$i', pic='$img', resume='$resumename ', intro='$introname' WHERE reg_id = '$useid'";
            $result = mysqli_query($query, $query2);
            header("location:profile.php");
        }  

        else 
        { 

            $query1=mysqli_query($query ,"INSERT IGNORE INTO `tbl_freshers`(`reg_id`, `dob`,  `alt_mobile`, `Vaccancy_feild`, `address`, `address2`, `city`, `state`, `country`, `pin`, `pic`, `resume`, `intro`) VALUES ('$useid','$b','$c', '$field','$d','$e','$f','$g','$h','$i','$img','$resumename ','$introname')");
            $result1 = mysqli_query($query, $query1);
            header("location:profile.php");
        }
        
 ?>                   
        <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "profile.php";
        </script>





 <?php
        }
        }
        ?>
<!DOCTYPE html>
    <html>
        <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>FlickCom : Profile</title>
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
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-4" width="225px" src="img/avatar1.jpg">
                <span class="font-weight-bold"><?php echo $row2['reg_email']; ?></span>
                <span class="text-black-50"><?php echo $row['Fname'];?></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>


            <!----------------------------FORM DESIGN---------------->

        <div class="profile-input-field">
            <form method="post" action="#" enctype="multipart/form-data" >
             <div class="d-flex justify-content-between align-items-center experience"><span>Add Additional Details</span></div><br>

                                <div class="col-md-12"><label class="labels"><b>Date Of Birth **</b></label><input type="date" name="dob" class="form-control" placeholder="experience" value="" min='1980-01-01' max='2017-01-01' value="" >
                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function () 
                        {
                            var today = new Date();
                            var month = ('0' + (today.getMonth() + 1)).slice(-2);
                            var day = ('0' + today.getDate()).slice(-2);
                            var year = today.getFullYear();
                            var date = year + '-' + month + '-' + day;
                            $('[id*=date]').attr('min', date);
                        });
                    </script>
                </div> <br>

                <div class="col-md-12"><label class="labels"><b>Alternative Number **</b></label><input type="text"id="altphn" name="atlnmbr" class="form-control" placeholder="additional details" value="" required onchange="Valaltphn();"/>
                        <span id="altphn" style="color:red;"></span>
                        <script>
                        function Valaltphn() 
                       {
                        var val = document.getElementById('atlnmbr').value;

                        if (!val.match(/^[6-9][0-9]{9,10}$/)) 
                        {
                            document.getElementById('altpnh').innerHTML="Only Numbers are allowed and must contain 10 number";
                            document.getElementById('atlnmbr').value = "";
                            return false;
                        }
                        document.getElementById('altphn').innerHTML=" ";
                        return true;
                        }
                        </script>
                </div><br>

                <div class="col-md-12"><label class="labels"><b>Job Roll **</b></label>
                    <div class="col-sm-12">
                        <select name="field" id="field" class="form-control" onChange="getSubcat(this.value);"  required>
                            <option value="">Select Job Roll</option> 

                            <?php $query1=mysqli_query($query,"SELECT * from `tbl_vacancy-field`");
                                while($row=mysqli_fetch_assoc($query1))
                            {
                            ?>

                            <option value="<?php echo $row['field'];?>"><?php echo $row['field'];?></option><?php } ?>
                        </select>

                    </div>
                </div><br>


                <div class="col-md-12"><label class="labels"><b>Address Line 1 **</b></label><input type="text" id="adrs1" name="adrs1" class="form-control" placeholder="experience" value="" onchange="Valadrs1();"/>
                    <span id="ad1" style="color:red;"></span>
                    <script>    
                    function Valadrs1() 
                    {
                    var val = document.getElementById('adrs1').value;

                    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
                    {
                        document.getElementById('ad1').innerHTML="Please Start With Capital Letter,& only alphabets are allowed";
    
                        document.getElementById('adrs1').value = "";
                        return false;
                    }
                    document.getElementById('ad1').innerHTML=" ";
                    return true;
                    }
                    </script>
            </div> <br>

                <div class="col-md-12"><label class="labels"><b>Post</b></label><input type="text" id="adrs2" name="adrs2" class="form-control" placeholder="additional details" value="" onchange="Valadrs2();"/>
                    <span id="ad2" style="color:red;"></span>
                    <script>    
                    function Valadrs2() 
                    {
                    var val = document.getElementById('adrs2').value;

                    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
                    {
                        document.getElementById('ad2').innerHTML="Please Start With Capital Letter,& only alphabets are allowed";
    
                        document.getElementById('adrs2').value = "";
                        return false;
                    }
                    document.getElementById('ad2').innerHTML=" ";
                    return true;
                    }
                    </script>
            </div><br>

                <div class="col-md-12"><label class="labels"><b>City</b></label><input type="text" id="city" name="city" class="form-control" placeholder="experience" value="" onchange="Valcity();"/>
                    <span id="cityname" style="color:red;"></span>
                    <script>    
                    function Valcity() 
                    {
                    var val = document.getElementById('city').value;

                    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
                    {
                        document.getElementById('cityname').innerHTML="Please Start With Capital Letter,& only alphabets are allowed";
    
                        document.getElementById('city').value = "";
                        return false;
                    }
                    document.getElementById('cityname').innerHTML=" ";
                    return true;
                    }
                    </script>
            </div> <br>

                <div class="col-md-12"><label class="labels"><b>State</b></label><input type="text" id="state" name="state" class="form-control" placeholder="additional details" value="" onchange="Valsate();"/>
                    <span id="statename" style="color:red;"></span>
                    <script>    
                    function Valsate() 
                    {
                    var val = document.getElementById('state').value;

                    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
                    {
                        document.getElementById('statename').innerHTML="Please Start With Capital Letter,& only alphabets are allowed";
    
                        document.getElementById('state').value = "";
                        return false;
                    }
                    document.getElementById('statename').innerHTML=" ";
                    return true;
                    }
                    </script>
            </div> <br>

            <div class="col-md-12"><label class="labels"><b>Nationality</b></label><input type="text" id="country" name="country" class="form-control" placeholder="experience" value="" onchange="Valcountry();"/>
                    <span id="countryname" style="color:red;"></span>
                    <script>    
                    function Valcountry() 
                    {
                    var val = document.getElementById('country').value;

                    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
                    {
                        document.getElementById('countryname').innerHTML="Please Start With Capital Letter,& only alphabets are allowed";
    
                        document.getElementById('country').value = "";
                        return false;
                    }
                    document.getElementById('countryname').innerHTML=" ";
                    return true;
                    }
                    </script>
            </div><br>

                <div class="col-md-12"><label class="labels"><b>Postcode</b></label><input type="text" id="pin" name="pin" class="form-control" placeholder="additional details" value="" required onchange="Valpin();"/>
                        <span id="Postcode" style="color:red;"></span>
                        <script>
                        function Valpin() 
                       {
                        var val = document.getElementById('pin').value;

                        if (!val.match(/^[5-9][0-9]{0,5}$/)) 
                        {
                            document.getElementById('Postcode').innerHTML="Please Enter A Valid Data ";
                            document.getElementById('pin').value = "";
                            return false;
                        }
                        document.getElementById('Postcode').innerHTML=" ";
                        return true;
                        }
                        </script>
                </div>


                <div class="card-body">
                    <div class="form-group">
                        <label>Profile *</label>
                        <div class="input-group col-xs-15">
                          <input class="file-upload-browse btn btn-gradient-primary" accept=".jpg,.png,.gif,.jfif,.webp" type="file" id="img" name="img" required="Must choose one" onchange="return fileValidation()" />
 
                        <div id="imagePreview"></div>
                        <script>
                        function fileValidation() {
                            var fileInput =
                            document.getElementById('img');
                            var filePath = fileInput.value;
            // Allowing file type
                            var allowedExtensions =/(\.jpg|\.jpeg|\.png|\.gif|\.jfif|\.webp)$/i;
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

                <div class="card-body">
                      <div class="form-group">
                        <label>Resume *</label>
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
                        <label>Intro *</label>
                        <div class="input-group col-xs-15">
                          <input class="file-upload-browse btn btn-gradient-primary" accept=".mp4,.mov,.wmv,.avi,.avchd" type="file" id="intro" name="intro" required="Must choose one" onchange="return videoValidation()" />
 
    <!-- Image preview -->
    <div id="videoPreview"></div>
    <script>
        function videoValidation() {
            var fileInput =
                document.getElementById('intro');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.mp4|\.mov|\.wmv|\.avi|\.avchd)$/i;
             
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

                
                    <center>
                    <input type="submit" name="submit" value="Save Profile" class="btn btn-primary" style="width:30em; background-color:#20c997;"><br><br>
                    </center>
                </div>

                <div class="form-group">

                <a href="profile.php"><center><button type="button" class="btn btn-primary">Skip</button></center></a>
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
