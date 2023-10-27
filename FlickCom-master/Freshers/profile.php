<?php
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');


$res=mysqli_query($query,"SELECT * FROM tbl_registration WHERE reg_id=".$_SESSION['id']);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

$res3=mysqli_query($query,"SELECT * FROM tbl_registration WHERE reg_id=".$row['reg_id']);
$row3=mysqli_fetch_array($res3,MYSQLI_ASSOC);

$res4=mysqli_query($query,"SELECT * FROM tbl_freshers WHERE reg_id=".$_SESSION['id']);
$row4=mysqli_fetch_array($res4,MYSQLI_ASSOC);


if(isset($_POST['submit'])){

        $useid=$_SESSION['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $uname = $_POST['uname'];
        $pswd2 = $_POST['pswd2'];

        $query1 = "UPDATE `tbl_registration` SET Fname = '$fname', Lname = '$lname',
                      gender = '$gender', Mobile = '$mobile', reg_email = '$uname', password = '$pswd2'
                      WHERE reg_id = '$useid'";
        $result = mysqli_query($query, $query1) or die(mysqli_error($query));

        
        $b = $_POST['dob'];
        $c = $_POST['atlnmbr'];
        $d = $_POST['adrs1'];
        $e = $_POST['adrs2'];
        $f = $_POST['city'];
        $g = $_POST['state'];
        $h = $_POST['country'];
        $i = $_POST['pin'];
        $field = $_POST['field'];
        //$j = $_POST['qual'];
        //$k = $_POST['expr'];
        //$l = $_POST['pic'];
        //$m = $_POST['resume'];
        //$n = $_POST['intro'];

        $checkrows=mysqli_num_rows($res4);
        if($checkrows>0) {

        $query2="UPDATE `tbl_freshers` SET reg_id='$useid', dob='$b', alt_mobile='$c', Vaccancy_feild='$field', address='$d', address2='$e', city='$f', state='$g',country='$h', pin='$i' WHERE reg_id = '$useid'";
                $result1 = mysqli_query($query, $query2);
    }
    else{}
 ?>                   
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
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
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../fileupload/Profile_pic/<?php echo $row4['pic'];?>">
                <br>
                <span class="font-weight-bold"><?php echo $row['reg_email']; ?></span>
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
            <form method="post" action="#" >
                <div class="form-group">
                    <label><b>First Name</b></label>
                        <input type="text" class="form-control" id="fname" name="fname" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['Fname']; ?>" required onchange="ValFname();"/>
                        <span id = "Fname" style="color:red"> </span>
                        <script>    
                        function ValFname() 
                        {
                        var val = document.getElementById('fname').value;

                        if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
                        {
                            document.getElementById('Fname').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                            document.getElementById('fname').value = "";
                            return false;
                        }
                        document.getElementById('Fname').innerHTML=" ";
                        return true;
                        }
                        </script>
                </div>

                <div class="form-group">
                    <label><b>Surname</b></label>
                        <input type="text" class="form-control" id="lname" name="lname" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['Lname']; ?>" required onchange="ValLname();"/>
                        <span id = "Lname" style="color:red"> </span>
                        <script>    
                        function ValLname() 
                        {
                        var val = document.getElementById('fname').value;

                        if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
                        {
                            document.getElementById('Lname').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
                            document.getElementById('fname').value = "";
                            return false;
                        }
                        document.getElementById('Lname').innerHTML=" ";
                        return true;
                        }
                        </script>
                </div>

                <div class="form-group">
                    <label><b>Gender</b></label>
                        <input type="text" class="form-control" id="gender" name="gender" style="width:20em;" placeholder="Enter your Gender" required value="<?php echo $row['gender']; ?>"/>
                </div>

                <div class="form-group">
                    <label><b>Mobile</b></label>
                        <input type="text" class="form-control" id="mobile" name="mobile" style="width:20em;" placeholder="Enter your Age" value="<?php echo $row['Mobile']; ?>" required onchange="Valphn();"/>
                        <span id="phn" style="color:red;"></span>
                        <script>
                        function Valphn() 
                       {
                        var val = document.getElementById('mobile').value;

                        if (!val.match(/^[7-9][0-9]{1,9}$/)) 
                        {
                            document.getElementById('pnh').innerHTML="Only Numbers are allowed and must contain 10 number";
                            document.getElementById('mobile').value = "";
                            return false;
                        }
                        document.getElementById('phn').innerHTML=" ";
                        return true;
                        }
                        </script>
                </div>

                <div class="form-group">
                    <label><b>User Name</b></label>
                    <input type="text" class="form-control" id="uname" name="uname" style="width:20em;" required placeholder="Enter your Address" readonly="" value="<?php echo $row['reg_email']; ?>"/>
                </div>

                <div class="form-group">
                    <label><b>Password</b></label>
                    <input type="text" class="form-control" id="pswd" name="pswd" style="width:20em;" required placeholder="Enter your Address" readonly="" value="<?php echo $row['password']; ?>"/>
                </div>

                <div class="form-group">
                    <label><b>Change Password</b></label>
                    <input type="text" class="form-control" id="pswd2" name="pswd2" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['password']; ?>"/>
                </div>
                <br><br><br><br><br><br><br><br>

                <div class="form-group">
                    <center>
                    <input type="submit" name="submit" value="Save Profile" class="btn btn-primary" style="width:30em; background-color:#20c997;"><br><br>
                    </center>
                </div>
            


        </div>
    </div>
</div>
<div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Add Additional Details</span></div><br>

                <div class="col-md-12"><label class="labels"><b>Date Of Birth **</b></label><input type="date" name="dob" class="form-control" placeholder="experience" value="<?php echo $row4['dob'];?>" min='1980-01-01' max='2017-01-01' value="" >
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

                <div class="col-md-12"><label class="labels"><b>Alternative Number **</b></label><input type="text"id="altphn" name="atlnmbr" class="form-control" placeholder="additional details" value="<?php echo $row4['alt_mobile'];?>" required onchange="Valaltphn();"/>
                        <span id="altphn" style="color:red;"></span>
                        <script>
                        function Valaltphn() 
                       {
                        var val = document.getElementById('atlnmbr').value;

                        if (!val.match(/^[7-9][0-9]{1,9}$/)) 
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

                <div class="col-md-12"><label class="labels"><b>Job Roll **</b></label><input type="text" id="field" name="field" class="form-control" placeholder="experience" value="<?php echo $row4['Vaccancy_feild'];?>" />
                    
                        <select name="field" id="field" class="form-control" >
                            <option value="">Change Job Roll</option> 

                            <?php $query1=mysqli_query($query,"SELECT * from `tbl_vacancy-field`");
                                while($row=mysqli_fetch_assoc($query1))
                            {
                            ?>

                            <option value="<?php echo $row['field'];?>"><?php echo $row['field'];?></option><?php } ?>
                        </select>

                    
                    
            </div> <br>

            <div class="col-md-12"><label class="labels"><b>Address Line 1 **</b></label><input type="text" id="adrs1" name="adrs1" class="form-control" placeholder="experience" value="<?php echo $row4['address'];?>" onchange="Valadrs1();"/>
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

                <div class="col-md-12"><label class="labels"><b>Address Line 2</b></label><input type="text" id="adrs2" name="adrs2" class="form-control" placeholder="additional details" value="<?php echo $row4['address2'];?>" onchange="Valadrs2();"/>
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

                <div class="col-md-12"><label class="labels"><b>City</b></label><input type="text" id="city" name="city" class="form-control" placeholder="experience" value="<?php echo $row4['city'];?>" onchange="Valcity();"/>
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

                <div class="col-md-12"><label class="labels"><b>State</b></label><input type="text" id="state" name="state" class="form-control" placeholder="additional details" value="<?php echo $row4['state'];?>" onchange="Valsate();"/>
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

            <div class="col-md-12"><label class="labels"><b>Nationality</b></label><input type="text" id="country" name="country" class="form-control" placeholder="experience" value="<?php echo $row4['country'];?>" onchange="Valcountry();"/>
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

                <div class="col-md-12"><label class="labels"><b>Postcode</b></label><input type="text" id="pin" name="pin" class="form-control" placeholder="additional details" value="<?php echo $row4['pin'];?>" required onchange="Valpin();"/>
                        <span id="Postcode" style="color:red;"></span>
                        <script>
                        function Valpin() 
                       {
                        var val = document.getElementById('pin').value;

                        if (!val.match(/^[7-9][0-9]{1,9}$/)) 
                        {
                            document.getElementById('Postcode').innerHTML="Only Numbers are allowed and must contain 10 number";
                            document.getElementById('pin').value = "";
                            return false;
                        }
                        document.getElementById('Postcode').innerHTML=" ";
                        return true;
                        }
                        </script>
                </div><br>

                <div class="col-md-12"><label class="labels"><b>Profile</b></label><input type="text" name="pic" class="form-control" placeholder="experience" value="../fileupload/Profile_pic/<?php echo $row4['pic'];?>"><a href="../fileupload/Profile_pic/<?php echo $row4['pic'];?>"target="_blank">View</a><!--a href="../fileupload/Profile_pic/<?php echo $row4['pic'];?>" download>Download</a--></div> <br>

                <div class="col-md-12"><label class="labels"><b>Resume</b></label><input type="text" name="resume" class="form-control" placeholder="additional details" value="../fileupload/Resume/<?php echo $row4['resume'];?>"><a href="../fileupload/Resume/<?php echo $row4['resume'];?>"target="_blank">View</a><!--a href="../fileupload/Resume/<?php echo $row4['pic'];?>" download>Download</a--></div><br>

                <div class="col-md-12"><label class="labels"><b>Intro</b></label><input type="text" name="intro" class="form-control" placeholder="additional details" value="../fileupload/Video/<?php echo $row4['intro'];?>"><a href="../fileupload/Video/<?php echo $row4['intro'];?>"target="_blank">View</a><!--a href="../fileupload/Video/<?php echo $row4['pic'];?>" download>Download</a--></div>
            </div>

<form method="post" action="profile_pic.php" >
                <div class="card-body">
                    <span>Update Your Profile Picture</span>
                    <div class="form-group">
                        
                        <div class="input-group col-xs-15">
                          <input class="file-upload-browse btn btn-gradient-primary" accept=".jpg,.png,.gif,.jfif,.webp" type="file" id="pic" name="pic" onchange="return fileValidation()" />
 
                        <div id="imagePreview"></div>
                        <script>
                        function fileValidation() {
                            var fileInput =
                            document.getElementById('pic');
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
                    <div class="form-group">
                    <center>
                    <input type="submit" name="Update" value="Update Profile" class="btn btn-primary" style="width:15em; background-color:#20c997;"><br><br>
                    </center>
                </div>
                </div> <br>

            </form>

        </div>
        </form>

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
