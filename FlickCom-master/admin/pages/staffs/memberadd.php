<?php
include('connectivity.php');
if(isset($_POST['submit']))
{
	$a=$_POST['fname'];
	$b=$_POST['lname'];
	$c=$_POST['email'];
	$d=$_POST['password'];
	$e=$_POST['desig'];
	$z=$_POST['type'];

$check=mysqli_query($query,"SELECT * from `tbl_addmembers` where Email='$c'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
    
}  
    
   else 
   { 
   	$query1=mysqli_query($query, "INSERT IGNORE INTO `tbl_addmembers`(`Fname`, `Lname`, `Email`, `password`,`Designation` ) VALUES ('$a','$b','$c','$d','$e')");
   	$result=($query1) or die($query->error);
   	
 }
	
	if($query1)
	{
		header('location:member_record.php');
	}
	$query2=mysqli_query($query ,"INSERT INTO `tbl_registration`(`password`,`reg_email`,`role_id`) VALUES ('$d','$c','$z');
");
	if($query2)
	{
		header('location:member_record.php');
	}
	 mysqli_close($query);
   
	echo "Successfully New Staff Added";
}
?>