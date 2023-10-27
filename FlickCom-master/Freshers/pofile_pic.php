<?php

$status = "";
session_start();
if(isset($_SESSION['id']))
{
include('connectivity.php');
$id=$_REQUEST['reg_id'];
$query1 = "SELECT * from tbl_freshers where reg_id='".$id."'"; 

$result = mysqli_query($query, $query1) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);


if(isset($_POST['update'])){

    $useid=$_SESSION['id'];
    $image = $_POST['pic'];
    $imagename = $_FILES['pic']['name'];
    $imagetype = $_FILES['pic']['type'];
    # $imageerror = $_FILES['img']['error'];
    $imagetemp = $_FILES['pic']['tmp_name'];

    //The path you wish to upload the image to
    $imagePath = "../fileupload/Profile_pic/";

    if(is_uploaded_file($imagetemp)) {
        move_uploaded_file($imagetemp, $imagePath . $imagename);
        }

        
            $query2="UPDATE `tbl_freshers` SET reg_id='$useid', pic='$imagename' WHERE reg_id = '$useid'";
            $result = mysqli_query($query, $query2);
        }  

        else 
        { 

        }
    }
}
    ?>