<?php
include('connectivity.php');
if(isset($_POST['submit']))
{
	$a=$_POST['fname'];
	$b=$_POST['lname'];
	$c=$_POST['email'];
	$d=$_POST['password'];
	$e=$_POST['feild'];
	$z=$_POST['type'];
	
	
	$query1=mysqli_query($query ,"INSERT INTO `tbl_addmembers`(`Fname`, `Lname`,`Email`, `password`,`Designation` ) VALUES ('$a','$b','$c','$d','$e')");
	
	if($query1)
	{
		header('location:member_record.php');
	}
	$query2=mysqli_query($query ,"INSERT INTO `tbl_login`(`password`,`reg_email`,`role_id`) VALUES ('$d','$c','$z')");
	if($query2)
	{
		header('location:member_record.php');
	}
}







?>